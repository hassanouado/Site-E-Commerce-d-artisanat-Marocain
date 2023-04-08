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
            <h1 class="h6 mb-0 text-white ">create new product</h1>
          </div>
        </div>
      
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                  @csrf
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">Nom de produit <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="libelle" placeholder="Enter name"  value="{{old('libelle')}}" class=" border form-control">
          @error('libelle')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3  -group">
            <label for="cat_id">Category <span class="text-danger">*</span></label>
            <select name="categorie_id" id="cat_id" class="form-control">
                <option value="">--Select any category--</option>
                @foreach($categories as $categorie)
                    <option value='{{$categorie->id}}'>{{$categorie->name_cat}}</option>
                @endforeach
            </select>
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="price" class="col-form-label">Quntite de stock <span class="text-danger">*</span></label>
            <input id="price" type="number" name="Q_produit" placeholder="Enter Q_produit"  value="{{old('Q_produit')}}" class="border form-control">
            @error('Q_produit')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="image" class="col-form-label">image <span class="text-danger">*</span></label>
            <input id="price" type="text" name="image" placeholder="Enter Q_produit"  value="{{old('image')}}" class="border form-control">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
      
            <label for="description" class="col-form-label">Description</label>
          <textarea class=" border form-control" id="description" name="description">{{old('description')}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="price" class="col-form-label">Price <span class="text-danger">*</span></label>
            <input id="price" type="number" name="prix" placeholder="Enter prix"  value="{{old('prix')}}" class=" mb-3 border form-control">
            @error('prix')
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
@endsection
