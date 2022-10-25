@extends('base')

@section('content')
    <div class="">
        <div class="col-md-4 offset-md-4 mt-5">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card mt-3">
                <div class="card-header" style=" background-color:rgb(53, 204, 166); color:">
                    <h3 class='text-center tex-dark'>Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/register') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="name" name="name" id="name" placeholder="Name" class="form-control">
                            </div>
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-intersex"></i></span>
                                <select name="gender" id="gender" class="form-select">
                                    <option hidden="true">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                            </div>
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-1" style="font-size: 1.2em">
                                <a href="{{ '/' }}">Already have an account</a>
                            </div>
                            <button class="btn btn-primary px-5">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
