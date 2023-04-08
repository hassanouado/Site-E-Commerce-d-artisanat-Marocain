@extends('layouts.frendEnd')

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="asset/img/p.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">artisanat marocain dinanderie</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">la production d'objets artisanaux par martelage de feuilles de métal.</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="asset/img/artisanat5.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Les bijoux Amazighs</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Passion Berbère déniche régulièrement des trésors de l’artisanat marocain </p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="asset/img/artisanat7.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">artisanat marocain poterie</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">citadine, fine et sophistiquée, reprend les motifs de l'art islamique</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="asset/img/artisanat9.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="asset/img/artisanat8.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
    <div class="row px-xl-5">
      @foreach ($products as $product)
          
      
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                   <a href="{{ route('detail',$product->id) }}">                     <img src="{{ $product->image }}" width="300" height="260" alt="client logo" class="customer-logo">
                    
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{ $product->libelle }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{  $product->prix }}</h5>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-grid gap-2 col-2 mx-auto">
        <button type="button" class="btn btn-success" width="100px" height="50px"  >voir plus</ion-icon> </button>
        </div>
    </div>
</div>


<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="asset/img/artisanat9.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="asset/img/artisanat8.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img loading="lazy" src="https://www.vala.ma/themes/vala/assets/img/ibn.png" width="280" height="60" alt="client logo" class="customer-logo"> 
                </div>
                <div class="bg-light p-4">
                    <img src="https://www.vala.ma/themes/vala/assets/img/inau.png" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
                <div class="bg-light p-4">
                    <img loading="lazy" src="https://www.vala.ma/themes/vala/assets/images/accueil/cciscs.png" width="280" height="60" alt="client logo" class="customer-logo" style="max-height:80%;max-width:80%;margin-top:0">
                </div>
                <div class="bg-light p-4">
                    <img loading="lazy" src="https://www.vala.ma/themes/vala/assets/img/LogoSafi.png" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
                <div class="bg-light p-4">
                    <img loading="lazy" src="https://www.vala.ma/themes/vala/assets/img/ccme.png" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
                <div class="bg-light p-4">
                    <img src="https://www.vala.ma/themes/vala/assets/img/akdital.png" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
                <div class="bg-light p-4">
                    <img loading="lazy" src="https://www.vala.ma/themes/vala/assets/img/logo_sochepress.png" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
                <div class="bg-light p-4">
                    <img src="https://www.vala.ma/themes/vala/assets/img/logo-cnom.jpg" width="280" height="60" alt="client logo" class="customer-logo">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Vendor End -->

@endsection