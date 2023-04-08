@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="page-wrapper container-login100 p-t-45 p-b-50">
    
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading text-dark ">
                <h2 class="title"> Registration </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row m-b-55">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input id="name"  class="input--style-5 form-control @error('name') is-invalid @enderror " type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label  class="label--desc">first name</label>
                                       
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5  form-control @error('name') is-invalid @enderror" type="text" name="prenom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label class="label--desc">last name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="email" type="email" class="input--style-5 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="password" type="password" class="input--style-5 form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Confirm Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="password-confirm" type="password" class="input--style-5 form-control"  name="password_confirmation" required autocomplete="new-password">
                               
        
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Address</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5 form-control @error('pays') is-invalid @enderror" type="text" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
                                       
                                        @error('pays')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label class="label--desc">pays</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5 form-control @error('ville') is-invalid @enderror" type="text" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                        @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label class="label--desc">ville</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Contact</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5 form-control @error('phone') is-invalid @enderror" type="text"  name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                        
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label class="label--desc">phone</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5 form-control @error('code_postal') is-invalid @enderror" type="text" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>
                                        @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label class="label--desc">code_postal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                                               <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
