@extends('layouts.auth')

@section('main-content')
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/cover-login.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('Auth') }}">
                    @csrf


                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label " for="form3Example3" style="font-size: 20px;">username</label>
                        <input type="username" id="form3Example3" class="form-control form-control-lg" name="username"
                            placeholder="Enter a valid username" style="border-color: #6D2932;" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4" style="font-size: 20px;">Password</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"
                            placeholder="Enter password" style="border-color: #6D2932;" />
                    </div>



                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #6D2932; border-color: #6D2932;">Login</button>

                    </div>

                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
