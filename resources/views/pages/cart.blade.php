@extends('layouts.app')

@section('content')

<main>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th class="th-image">Resim</th>
              <th>Adı</th>
              <th>Miktar</th>
              <th style="width: 66px;">İşlem</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="p-0"><img src="https://www.gulhan.com/assets/media/b-temizleme-topu_productImages_resize__400_80.jpg" alt="" class="img-fluid"></td>
              <td>TEMİZLEME TOPU</td>
              <td>
                <div class="d-flex flex-wrap gap-2">
                  <button class="btn btn-outline-primary">-</button>
                  <input style="width: 66px;" type="text" class="form-control text-center" value="1">
                  <button class="btn btn-outline-primary">+</button>
                </div>
              </td>
              <td>
                <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-primary text-white">Sipariş Detay</div>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex flex-wrap justify-content-between items-center gap-2">
                <span>Ürün Miktar</span>
                <span>6</span>
              </li>
              <li class="list-group-item d-flex flex-wrap justify-content-between items-center gap-2">
                <span>İndirim</span>
                <span>36.99 ₺</span>
              </li>
              <li class="list-group-item d-flex flex-wrap justify-content-between items-center gap-2">
                <span>KDV</span>
                <span>36.99 ₺</span>
              </li>
              <li class="list-group-item d-flex flex-wrap justify-content-between items-center gap-2">
                <span>Toplam</span>
                <span>99.99 ₺</span>
              </li>
            </ul>

            <div class="p-2 mt-3">
              <button class="btn btn-primary w-100">Satın Al</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection
