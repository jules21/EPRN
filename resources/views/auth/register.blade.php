@extends('layouts.frontend')
@section('title', 'eprn membership | login')
@section('content')

        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a></h3>
                <div class="p-3">
                      <h4 class="text-muted font-18 m-b-5 text-center"></h4>
                    <p class="text-muted text-center">{{ __('Get your free fonik account now.') }}</p>
                    
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
<!--

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
-->
                        
                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Register') }}</button></div>
                        </div>
                        
                        
                         <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <p class="font-14 text-muted mb-0">By registering you agree to the Lexa <a href="#" class="text-primary">Terms of Use</a></p>
                            </div>
                        </div>
                    </form>




             
            </div>
            </div></div>
@section('extra')       
          
        <div class="m-t-40 text-center">
            <p>Already have an account ? <a href="{{url('login')}}" class="text-primary">Login</a></p>
            <p>© 2018 EPRN. Crafted with <i class="mdi mdi-heart text-danger"></i> by The Click</p>
        </div>
@endsection
@endsection
