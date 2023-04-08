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
            <h1 class="h6 mb-0 text-white ">update user</h1>
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
          <label for="inputName" class="col-form-label">prenom  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="prenom" placeholder="Enter prenom"  value="{{ $user->prenom}}" class=" border form-control">
          @error('prenom')
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
            <label for="inputName" class="col-form-label">pays  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="pays" placeholder="Enter pays"  value="{{ $user->pays}}" class=" border form-control">
          @error('pays')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">ville  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="ville" placeholder="Enter ville"  value="{{ $user->ville}}" class=" border form-control">
          @error('ville')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">phone  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="phone" placeholder="Enter phone"  value="{{ $user->phone}}" class=" border form-control">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class=" text-muted pt-3 form-group">
            <label for="inputName" class="col-form-label">code postal  <span class="text-danger">*</span></label>
          <input id="inputName" type="text" name="code_postal" placeholder="Enter code_postal"  value="{{ $user->code_postal}}" class=" border form-control">
          @error('code_postal')
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
@endsection
