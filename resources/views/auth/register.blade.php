<!-- register.blade.php -->
@extends('layouts.auth')

@section('content') 
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container  h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Create an Account</h4>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-outline mb-1">
                                            <input type="text" id="name" class="form-control" name="name"
                                                placeholder="Full Name" value="{{ old('name') }}"
                                                required autofocus />
                                            <label class="form-label" for="name"></label>
                                        </div>

                                        <div class="form-outline mb-1">
                                            <input type="email" id="email" class="form-control" name="email"
                                                placeholder="Email address" value="{{ old('email') }}"
                                                required />
                                            <label class="form-label" for="email"></label>
                                        </div>

                                        <div class="form-outline mb-1">
                                            <input type="password" id="password" class="form-control" name="password"
                                                required placeholder="Password"/>
                                            <label class="form-label" for="password"></label>
                                        </div>

                                        <div class="form-outline mb-1">
                                            <input type="password" id="password_confirmation" class="form-control"
                                                name="password_confirmation" required placeholder="Confirm Password"/>
                                            <label class="form-label" for="password_confirmation"></label>
                                        </div>

                                        <div class="text-center pt-1 mb-3 pb-1 d-flex flex-column">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Register</button>
                                            <a class="text-muted" href="/login">Already have an account? Login</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">By creating an account, you agree to our Terms &amp;
                                                Conditions.</p>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
