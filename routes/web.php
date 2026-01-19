<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogcategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.sell-page');
});

Route::prefix('/gulhan')->group(function () {

    // Varsayılan Yönlendirme
    Route::redirect('/', '/gulhan/tr');

    // Dil Değiştirme
    Route::get('/setLang/{locale}', [LocalizationController::class, 'setLang'])->name('setLang');

    /* * --------------------------------------------------------------------------
     * 1. CART & QUOTE AJAX ACTIONS (DİL BAĞIMSIZ)
     * --------------------------------------------------------------------------
     * Bu rotalar AJAX ile çağrılır (Ekleme, Silme, Güncelleme).
     * İsimleri sabittir: cart.add, cart.remove vb.
     */
    Route::controller(CartController::class)->group(function () {
        Route::post('/cart/add', 'addToCart')->name('cart.add');
        Route::patch('/cart/update', 'updateCart')->name('cart.update');
        Route::delete('/cart/remove', 'removeCart')->name('cart.remove');
        Route::get('/cart/clear', 'clearCart')->name('cart.clear');
        Route::post('/quote/submit', 'submitQuote')->name('quote.submit');
    });

    /* * --------------------------------------------------------------------------
     * 2. TÜRKÇE SAYFALAR
     * --------------------------------------------------------------------------
     */
    Route::prefix('/tr')->name('tr.')->controller(PageController::class)->group(function () {
        Route::get('/', 'getHome')->name('home');

        // Haberler
        Route::get('/haberler', 'getBlogs')->name('blogs');
        Route::get('/haber/{slug}', 'getBlogDetail')->name('getBlogDetail');
        Route::get('/haber/kategori/{slug}', 'getCategoryBlogs')->name('getCategoryBlogs');

        // Ürünler
        Route::get('/urunler', 'getProducts')->name('getProducts');
        Route::get('/urun/{id}/{slug}', 'getProductDetail')->name('getProductDetail');
        Route::get('/kategori/{slug}', 'getCategoryProducts')->name('getCategoryProducts');
        Route::get('/marka/{slug}', 'getBrandProducts')->name('getBrandProducts');

        // Teklif Listem Sayfası (View)
        // DİKKAT: Eski adı 'getCart' idi, şimdi 'cart.index' oldu.
        Route::get('/teklif-listem', [CartController::class, 'index'])->name('cart.index');

        // Kurumsal & Diğer
        Route::get('/kurumsal', 'getInstitutional')->name('getInstitutional');
        Route::get('/katalog', 'getCatalog')->name('getCatalog');
        Route::get('/medya', 'getMedia')->name('getMedia');
        Route::get('/galeri', 'getPhotos')->name('getPhotos');
        Route::get('/galeri/{slug}', 'getPhotoDetail')->name('getPhotoDetail');
        Route::get('/video', 'getVideos')->name('getVideos');
        Route::get('/video/{slug}', 'getVideoDetail')->name('getVideoDetail');
        Route::get('/ik/form', 'getCareer')->name('getCareer');
        Route::post('/ik/form', 'postCareer');
        Route::get('/iletisim', 'getContact')->name('getContact');
    });

    /* * --------------------------------------------------------------------------
     * 3. İNGİLİZCE SAYFALAR
     * --------------------------------------------------------------------------
     */
    Route::prefix('/en')->name('en.')->controller(PageController::class)->group(function () {
        Route::get('/', 'getHome')->name('home');

        // News
        Route::get('/news', 'getBlogs')->name('blogs');
        Route::get('/news/{slug}', 'getBlogDetail')->name('getBlogDetail');
        Route::get('/news/category/{slug}', 'getCategoryBlogs')->name('getCategoryBlogs');

        // Products
        Route::get('/products', 'getProducts')->name('getProducts');
        Route::get('/product/{id}/{slug}', 'getProductDetail')->name('getProductDetail');
        Route::get('/category/{slug}', 'getCategoryProducts')->name('getCategoryProducts');
        Route::get('/brand/{slug}', 'getBrandProducts')->name('getBrandProducts');

        // Quote List Page (View)
        Route::get('/quote-list', [CartController::class, 'index'])->name('cart.index');

        // Corporate & Others
        Route::get('/corporate-identity', 'getInstitutional')->name('getInstitutional');
        Route::get('/catalog', 'getCatalog')->name('getCatalog');
        Route::get('/media', 'getMedia')->name('getMedia');
        Route::get('/photo-gallery', 'getPhotos')->name('getPhotos');
        Route::get('/gallery/{slug}', 'getPhotoDetail')->name('getPhotoDetail');
        Route::get('/video', 'getVideos')->name('getVideos');
        Route::get('/video/{slug}', 'getVideoDetail')->name('getVideoDetail');
        Route::get('/career', 'getCareer')->name('getCareer');
        Route::post('/career', 'postCareer');
        Route::get('/contact', 'getContact')->name('getContact');
    });

    /* * --------------------------------------------------------------------------
     * 4. ADMIN ROTALARI
     * --------------------------------------------------------------------------
     */
    Route::redirect('/admin', '/gulhan/admin/kontrol-paneli');

    Route::get('/giris-yap', [AuthController::class, 'getLogin'])->name('login')->middleware('guest');
    Route::post('/giris-yap', [AuthController::class, 'postLogin'])->middleware('guest');
    Route::post('/cikis-yap', [AuthController::class, 'postLogout'])->middleware('admin')->name('logout');

    Route::prefix('/admin')->middleware('admin')->name('admin.')->group(function () {
        Route::get('/kontrol-paneli', [AdminController::class, 'getDashboard'])->name('dashboard');
        Route::resource('/sliderlar', SliderController::class, ["names" => "sliders"]);
        Route::get('/footers', [FooterController::class, 'edit'])->name('footers.edit');
        Route::patch('/footers', [FooterController::class, 'update'])->name('footers.update');
        Route::get('/contacts', [ContactController::class, 'edit'])->name('contacts.edit');
        Route::patch('/contacts', [ContactController::class, 'update'])->name('contacts.update');
        Route::get('/media/giris', [MediaController::class, 'getEntry'])->name('medias.entry');
        Route::patch('/media/giris', [MediaController::class, 'updateEntry']);

        Route::resource('/photos', PhotoController::class, ['names' => 'photos']);
        Route::resource('/videos', VideoController::class, ['names' => 'videos']);
        Route::resource('/haber-kategorileri', BlogcategoryController::class, ['names' => 'blogcategories']);
        Route::resource('/blogs', BlogController::class, ['names' => 'blogs']);
        Route::resource('/urun-kategorileri', ProductcategoryController::class, ['names' => 'productcategories']);
        Route::resource('/markalar', BrandController::class, ['names' => 'brands']);
        Route::resource('/urunler', ProductController::class, ['names' => 'products']);
        // ... Admin grubunun içi ...
        Route::get('/cok-satanlar', [\App\Http\Controllers\Admin\BestSellerController::class, 'index'])->name('bestsellers.index');
        Route::post('/cok-satanlar', [\App\Http\Controllers\Admin\BestSellerController::class, 'store'])->name('bestsellers.store');

        // YENİ EKLENEN SATIR:
        Route::resource('/teklifler', \App\Http\Controllers\Admin\OrderController::class, ['names' => 'orders'])->except(['create', 'store']);
    });

    Route::prefix('/ajax')->controller(AjaxController::class)->name('ajax.')->middleware('admin')->group(function () {
        Route::post('/updatePositions', 'updatePositions')->name('updatePositions');
        Route::post('/destroyMultiPhoto', 'destroyMultiPhoto')->name('destroyMultiPhoto');
        Route::post('/destroyBlogPhoto', 'destroyBlogPhoto')->name('destroyBlogPhoto');
    });

    Route::fallback(function () {
        $langUrl = App::getLocale() == 'tr' ? '/tr' : '/en';
        return redirect()->route('/gulhan/' . $langUrl);
    });
});
