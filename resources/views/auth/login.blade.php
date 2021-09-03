@extends('layouts.master')

@section('bg')

     <!-- Begin page -->
        <div class="accountbg" style="background: url({{ asset('backend/images/bg-2.jpg') }});background-size: cover;background-position: center;"></div>

@endsection

@section('content')





            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="{{ route('frontpage') }}" class="text-success">
                        <span><img src="{{ asset('backend/images/logo.png')}}" alt="E Study Note" height="26"></span>
                    </a>
                            </h2>

                             <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="emailaddress" required="" placeholder="Enter your email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                          @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                         @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted float-right"><small>Forgot your password?</small>
                                            </a>
                                            <label for="password">Password</label>
                                            <input class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" type="password" required="" id="password" placeholder="Enter your password">
                                        @endif
            
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="{{'register'}}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            

        </div>



@endsection
