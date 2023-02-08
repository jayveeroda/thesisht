@extends('layouts.auth')

@section('auth')
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    {{-- <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="index.html" class="auth-logo">
                                <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto"
                                    alt="">
                                <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto"
                                    alt="">
                            </a>
                        </div>
                    </div> --}}

                    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-6">
                                    <input class="form-control @if ($errors->has('first_name')) is-invalid @endif"
                                        name="first_name" value="{{ old('first_name', '') }}" type="text"
                                        placeholder="First Name">
                                </div>
                                <div class="col-6">
                                    <input class="form-control @if ($errors->has('last_name')) is-invalid @endif"
                                        name="last_name" type="text" value="{{ old('last_name', '') }}"
                                        placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @if ($errors->has('email')) is-invalid @endif"
                                        name="email" type="email" value="{{ old('email', '') }}" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @if ($errors->has('username')) is-invalid @endif"
                                        name="username" type="text" value="{{ old('username', '') }}"
                                        placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @if ($errors->has('password')) is-invalid @endif"
                                        name="password" type="password" value="{{ old('password', '') }}"
                                        placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control  @if ($errors->has('password_confirmation')) is-invalid @endif"
                                        name="password_confirmation" value="{{ old('password_confirmation', '') }}"
                                        type="password" placeholder="Password Confirm">
                                </div>
                            </div>

                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a
                                                href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                        type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->
@endsection
