@extends('layouts.admin')

@section('content')
<style>
    .uper{
        margin-top: 3%;
    }
  
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<div class="uper">
   
    
    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">         
             <div class="lh-1">
            <h1 class="h6 mb-0 text-white ">update product</h1>
          </div>
        </div>
      
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('product.update', $product->id) }}">
                  {{-- {{ url('/product/update/'.$product->id) }} --}}
                  @csrf
  
          <div class=" text-muted pt-3 form-group"> 
            <label for="inputName" class="col-form-label">Nom de produit <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="libelle" placeholder="Enter name"  value="{{$product->libelle}}" class=" border form-control">
          @error('libelle')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="cat_id">Category <span class="text-danger">*</span></label>
            <select name="categorie_id" id="cat_id" class="form-control">
                <option value="{{$product->categorie_id}}"><button>{{ $product->category->name_cat }}</button></option>
                @foreach($categories as $categorie)
                    <option value='{{$categorie->id}}'>{{$categorie->name_cat}}</option>
                @endforeach
            </select>
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="price" class="col-form-label">Quntite de stock <span class="text-danger">*</span></label>
            <input id="price" type="number" name="Q_produit" placeholder="Enter Q_produit"  value="{{$product->Q_produit}}" class="border form-control">
            @error('Q_produit')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="image" class="col-form-label">image<span class="text-danger">*</span></label>
            <input id="image" type="text" name="image" placeholder="Enter Q_produit"  value="{{$product->image}}" class="border form-control">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      
          <div class=" text-muted pt-3 form-group">
      
            <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group >
            <label for="price" class="col-form-label">Price <span class="text-danger">*</span></label>
            <input id="price" type="number" name="prix" placeholder="Enter prix"  value="{{$product->prix}}" class=" border form-control">
            @error('prix')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group mt-2">
            <button type="reset" class="btn btn-warning">Reset</button>
             <button class="btn btn-success" type="submit">Submit</button>
          </div>
          
       
    </form>
</div>
</div>
      </main>
    
    
</div>
@endsection
{{--  --}}
{{-- @extends('layouts.admin')

@section('content')
<style>
    .uper{
        margin-top: 3%;
    }
  
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<div class="uper">
   
    
    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">         
             <div class="lh-1">
            <h1 class="h6 mb-0 text-white ">create new product</h1>
          </div>
        </div>
      
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('user.store') }}">
                  @csrf
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">Nom  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="name" placeholder="Enter name"  value="{{ $user->name}}" class=" border form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
         
          <div class=" text-muted pt-3 form-group">
            <label for="price" class="col-form-label">email <span class="text-danger">*</span></label>
            <input id="price" type="email" name="email" placeholder="Enter email"  value="{{ $user->email}}" class="border form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="image" class="col-form-label">password <span class="text-danger">*</span></label>
            <input id="price" type="text" name="password" placeholder="Enter password"  value="{{ $user->password}}" class=" border form-control">
            @error('password')
            <span class="text-danger">{{$message}}</span> 
            @enderror
          </div>
         
          <div class=" text-muted pt-3 form-group">
            <label for="image" class="col-form-label">role <span class="text-danger">*</span></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="role_as" value="user" id="lexCheckDefault">
              <label class="form-check-label" for="lexCheckDefault">
                user 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="role_as" value="admin" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                admin 
              </label>
            </div>
            @error('password')
            <span class="text-danger">{{$message}}</span> 
            @enderror
          </div>
        
          <div class="form-group mb-3">
            <button type="reset" class="btn btn-warning">Reset</button>
             <button class="btn btn-success" type="submit">Submit</button>
          </div>
          
       
    </form>
</div>
</div>
      </main>
    
    
</div>
@endsection --}}
