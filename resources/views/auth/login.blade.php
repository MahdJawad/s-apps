@extends('layouts.login')

@section('content')
<form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
 @csrf
                            <div class="text-center">
                            <img src="{{asset('images/auth/logo-sirba-rh.png')}}" alt="rh1-min.png" style="height: 100px;">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">{{ __('Login') }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <label class="float-label">{{ __('Adresse Email ') }}</label>
                                    </div>
                                    <div class="form-group form-primary">
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <label class="float-label">{{ __('Mot de passe') }}</label>
                                    </div>
                                    <div class="row m-t-25 text-left">

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">{{ __('Se connecter') }}</button>
                                        </div>
                                    </div>
                                 
                                    </div>
                                   
                                    <hr/>
                                    <div class="row">
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
@endsection
