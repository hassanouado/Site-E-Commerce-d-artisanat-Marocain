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
            <h1 class="h6 mb-0 text-white ">update categorie</h1>
          </div>
        </div>
      
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ url('/Category/update/'.$category->id) }}">
                  @csrf
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">Nom de category <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="name_cat" placeholder="Enter name"  value="{{ $category->name_cat}}" class="form-control">
          @error('name_cat') 

          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">slug de category <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="slug" placeholder="Enter slug"  value="{{ $category->slug}}" class="form-control">
          @error('slug') 

          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">status de category <span class="text-danger">*</span></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="active" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                 Active
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="inactive" id="exCheckChecked" checked>
              <label class="form-check-label" for="exCheckChecked">
                Inactive
              </label>
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
