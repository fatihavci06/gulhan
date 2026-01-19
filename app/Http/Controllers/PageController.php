<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;
use App\Mail\CareerMail;
use App\Models\BestSeller;
use App\Models\Blogcategory;
use App\Models\Brand;
use App\Models\Career;
use App\Models\Slider;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class PageController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct()
    {
        $this->catchErr = "Bilinmeyen hata";
    }

    public function getHome()
    {
        // 1. Blogları Çek
        $blogs = Blog::with('categories')->latest('created_at')->get();

        // 2. Sliderları Çek
        $sliders = Slider::orderBy('position', 'ASC')->get();

        // 3. En Çok Satanları Çek (YENİ)
        // İlişkili ürün (product) ve onun kategorilerini (categories) eager load ile çekiyoruz (N+1 sorunu olmasın diye)
        $bestSellers = BestSeller::with(['product.categories'])
            ->orderBy('position', 'asc')
            ->take(8) // Maksimum 8 adet
            ->get();

        // 4. Kategoriler (Blade dosyanızda $navbar_product_categories döngüsü olduğu için)
        // Not: Eğer bunu AppServiceProvider'da global paylaşıyorsanız bu satıra gerek yok.
        $navbar_product_categories = ProductCategory::whereNull('category_id')
            ->get();

        return view('pages.home', compact('blogs', 'sliders', 'bestSellers', 'navbar_product_categories'));
    }

    public function getBlogs()
    {
        $blogs = Blog::with('categories')->latest('created_at')->get();
        $orderByLang = App::getLocale() == 'tr' ? 'name_tr' : 'name_en';
        $blog_categories = Blogcategory::orderBy($orderByLang, 'DESC')->get();

        return view('pages.blogs', compact('blogs', 'blog_categories'));
    }

    public function getBlogDetail($slug)
    {
        $whereSlugLang = App::getLocale() == 'tr' ? 'slug_tr' : 'slug_en';

        $blog = Blog::with('categories')->where($whereSlugLang, $slug)->orderBy('created_at', 'DESC')->first();
        if (!$blog) {
            $redirectRoute = App::getLocale() . '.blogs';
            return $this->error(redirect()->route($redirectRoute), 'Böyle bir haber bulunamadı');
        }

        $blogs = Blog::latest('updated_at')->where('id', "!=", $blog->id)->limit(3)->get();

        return view('pages.blog-detail', compact('blog', 'blogs'));
    }

    public function getCategoryBlogs($slug)
    {
        $whereSlugLang = App::getLocale() == 'tr' ? 'slug_tr' : 'slug_en';

        $category = Blogcategory::with('blogs.categories')->where($whereSlugLang, $slug)->orderBy('created_at', 'DESC')->first();
        if (!$category) {
            $redirectRoute = App::getLocale() . '.blogs';
            return $this->error(redirect()->route($redirectRoute), 'Böyle bir haber kategorisi bulunamadı');
        }

        return view('pages.category-blogs', compact('category'));
    }

    public function getProducts(Request $request)
{
    // Sidebar verileri
    $categories = Productcategory::orderBy('name_tr', 'ASC')->whereNull('category_id')->get();
    $brands = Brand::orderBy('name', 'ASC')->get();

    // Sorguyu başlat
    $query = Product::with(['brands', 'categories'])->latest('updated_at');

    // 1. GENİŞLETİLMİŞ ARAMA FİLTRESİ
    if ($request->filled('keyword')) {
        $keyword = $request->keyword;

        $query->where(function ($q) use ($keyword) {
            // A. Ürün Bilgilerinde Ara
            $q->where('name_tr', 'LIKE', "%{$keyword}%")
              ->orWhere('name_en', 'LIKE', "%{$keyword}%")
              ->orWhere('gyp_code', 'LIKE', "%{$keyword}%")
              ->orWhere('original_no', 'LIKE', "%{$keyword}%")

            // B. İlişkili Marka Adında Ara (Volvo, Cat vb.)
              ->orWhereHas('brands', function ($subQuery) use ($keyword) {
                  $subQuery->where('name', 'LIKE', "%{$keyword}%");
              })

            // C. İlişkili Kategori Adında Ara (Conta, Keçe vb.)
              ->orWhereHas('categories', function ($subQuery) use ($keyword) {
                  $subQuery->where('name_tr', 'LIKE', "%{$keyword}%")
                           ->orWhere('name_en', 'LIKE', "%{$keyword}%");
              });
        });
    }

    // 2. Sayfalama
    $products = $query->paginate(12);

    // Sayfalama linklerine parametreyi ekle
    if ($request->filled('keyword')) {
        $products->appends(['keyword' => $request->keyword]);
    }

    return view('pages.products', compact('categories', 'brands', 'products'));
}

    public function getProductDetail($id)
    {
        // 1. Ürünü Bul
        $product = Product::with(['categories', 'brands'])->find($id);

        if (!$product) {
            return redirect()->route(App::getLocale() == 'tr' ? 'tr.getProducts' : 'en.getProducts')->with('error', 'Ürün bulunamadı');
        }

        // 2. Sidebar İçin Markaları Çek
        $brands = Brand::orderBy('name', 'ASC')->get();

        // 3. Benzer Ürünleri Çek
        $similarProducts = collect();

        if ($product->categories->isNotEmpty()) {
            // Ürünün ait olduğu kategori ID'lerini al
            $categoryIds = $product->categories->pluck('id');

            $similarProducts = Product::whereHas('categories', function ($q) use ($categoryIds) {
                // HATA ÇÖZÜMÜ BURADA:
                // Sadece 'id' yazmak yerine 'tablo_adi.id' yazıyoruz.
                // Hata mesajınızda tablo adı 'productcategories' olarak görünüyor.
                $q->whereIn('productcategories.id', $categoryIds);
            })
                ->where('products.id', '!=', $product->id) // Garanti olsun diye buraya da tablo adı ekledik
                ->with('categories')
                ->inRandomOrder()
                ->take(5)
                ->get();
        }

        return view('pages.product-detail', compact('product', 'brands', 'similarProducts'));
    }

    public function addToCart(Request $request, $id)
    {
        if ($request->amount > 0) {
            $product = Product::findOrFail($id);
        } else {
            return $this->error(redirect()->back(), 'Geçersiz işlem');
        }
    }

    public function getCategoryProducts($slug)
    {
        // Markaları çek
        $brands = Brand::orderBy('name', 'ASC')->get();

        // Aktif dile göre slug sütununu belirle
        $whereSlugLang = App::getLocale() == 'tr' ? 'slug_tr' : 'slug_en';

        // 1. KATEGORİYİ BUL
        // Dikkat: Burada 'products' ilişkisini with() içine YAZMIYORUZ.
        // Çünkü eager load (with) ile çekersek hepsini getirir, sayfalama yapamayız.
        $category = Productcategory::with('categories') // Sadece alt kategorileri çekiyoruz
            ->where($whereSlugLang, $slug)
            ->first();

        if (!$category)
            return $this->error(redirect()->back(), 'Kategori bulunamadı');

        // 2. ÜRÜNLERİ SAYFALA (PAGINATE)
        // İlişkiyi metod olarak çağırıp () paginate ekliyoruz.
        $products = $category->products()->paginate(12);

        // 3. View'a gönder
        // Artık $products değişkeni bir Paginator objesi olduğu için view dosyasında links() çalışacaktır.
        return view('pages.products', compact('category', 'brands', 'products'));
    }

    public function getBrandProducts($slug)
    {
        $products = [];
        $brands = Brand::orderBy('name', 'ASC')->get();

        $brandProducts = Brand::with('products')->where('slug', $slug)->first();
        if (!$brandProducts)
            return $this->error(redirect()->route('home'), 'Marka bulunamadı');

        return view('pages.products', compact('brandProducts', 'brands'));
    }

    public function getCart()
    {
        return view('pages.cart');
    }

    public function getCatalog()
    {
        return view('pages.catalog');
    }

    public function getInstitutional()
    {
        return view('pages.institutional');
    }

    public function getMedia()
    {
        return view('pages.media');
    }

    public function getPhotos()
    {
        $photos = Photo::orderBy('position', 'ASC')->get();

        return view('pages.photos', compact('photos'));
    }

    public function getPhotoDetail($slug)
    {
        $whereSlugLang = App::getLocale() == 'tr' ? 'slug_tr' : 'slug_en';

        $photo = Photo::with('multiPhotos')->where($whereSlugLang, $slug)->first();

        return view('pages.photo-detail', compact('photo'));
    }

    public function getVideos()
    {
        $videos = Video::orderBy('position', 'ASC')->get();

        return view('pages.videos', compact('videos'));
    }

    public function getVideoDetail($slug)
    {
        $whereSlugLang = App::getLocale() == 'tr' ? 'slug_tr' : 'slug_en';

        $video = Video::where($whereSlugLang, $slug)->orderBy('created_at', 'DESC')->first();

        return view('pages.video-detail', compact('video'));
    }

    public function getCareer()
    {
        $filePath = public_path('json/ulkeler.json');
        $countries = json_decode(file_get_contents($filePath), true);

        $filePath2 = public_path('json/turkey-cities.json');
        $cities = json_decode(file_get_contents($filePath2), true);

        return view('pages.career', compact('countries', 'cities'));
    }

    public function postCareer(Request $request)
    {
        $request->validate([
            "gender" => "bail|required|in:man,woman",
            "name" => "bail|required|max:255",
            "surname" => "bail|required|max:255",
            "nationality" => "bail|required|max:255",
            "address" => "bail|required|max:255",
            "district" => "bail|required|max:255",
            "city" => "bail|required|max:255",
            "phone" => "bail|required|regex:/^\+?[0-9]+$/|min:9|max:255",
            "email" => "bail|required|email|email:rfc,dns|max:255",
            "cv" => "bail|required|file|mimes:jpg,png,jpeg|max:3999"
        ]);

        try {
            $cvName = '/upload/cv/' . $request->name . $request->surname . time() . '-' . rand(1, 99) . '.' . $request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('/upload/cv'), $cvName);

            Career::create([
                "gender" => $request->gender,
                "name" => $request->name,
                "surname" => $request->surname,
                "nationality" => $request->nationality,
                "address" => $request->address,
                "district" => $request->district,
                "city" => $request->city,
                "phone" => $request->phone,
                "email" => $request->email,
                "cv" => $cvName,
            ]);

            $sendEmail = 'canoguzorhan066@gmail.com';
            Mail::to($sendEmail)->send(new CareerMail($request->name, $request->surname, $request->email, $cvName));

            return $this->success(redirect()->route('getCareer'), 'Kariyer formu gönderildi');
        } catch (Exception $err) {
            return $this->error(redirect()->route('getCareer'), $err->getMessage());
        }
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
