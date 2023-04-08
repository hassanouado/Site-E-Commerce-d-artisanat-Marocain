@extends('layouts.frendEnd')

@section('content')
 <div class="container">
    <div class="row d-flex">
       @if ($cart)
           
      
        <div class="col-md-8">
@foreach ($cart->items as $product)
    <div class="card mb-2">
        <div class="card-body" >
        <h5 class="card-title" >
              {{ $product['libelle']  }}
        </h5>
        <div class="card-text" >
            {{ $product['price']  }}
            <a href="#" class="btn btn-danger bt-sm ml-4">remove</a>
            <input type="text" name="qty" id="qty" value="{{ $product['qty'] }}" >
            <a href="#" class="btn btn-secondary bt-sm ">change</a>
      </div>
        </div>
    </div>
 @endforeach
 <p><strong>Total : {{ $cart->totalPrice }}</strong></p>
 <a href="{{ route('checkout') }}" class="float-end btn btn-outline-success" >procede to checkout</a>
        </div>
         <div class="col-md-8">
             <div class="card bg-primary text-white">
              <div class="card-body">
                <h3 class="card-titel">
                your cart
                <hr>
                </h3>
                <div class="card-text">
                    <p>Total Aount is {{ $cart->totalPrice }}</p>
                    <p>Total quntite is {{ $cart->totalQty }}</p>
                    <a href="{{ route('cart.checkout',$cart->totalPrice) }}" class="btn btn-info" >checkout</a>
                </div>
              </div>
            </div>
        </div> 
        @else
        <p>there is no item in the cart</p>
        @endif
    </div>
 </div>

@endsection