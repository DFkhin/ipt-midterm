@extends('base')

@section('content')
    <div class="container card bg-secondary">
        <div class="card-header">
            <h1 class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-teal-600 mt-4 lg:mt-0"
            style="font-weight: 400; font-size:20px; ">{{ __('User: ' . $user->name) }}
            </h1>
        </div>

        <div class="row">

            @foreach ($posts as $post)
                <div class="col-md-4 mt-1">
                    <div class="card {{ $post->user->gender === 'female' ? 'female' : 'male' }}">
                        <div class="card">

                            <nav class="navbar navbar-expand-lg text-info mb-2">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="">
                                        {{ $post->user->name }}</a>

                                    <div class="collapse navbar-collapse" id="navbarNavAlt">
                                        <div class="navbar-nav ms-auto">
                                            <li class="nav-item text-bg-primary">
                                                <a class="nav-link text-light" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $post->category->category }}
                                                </a>
                                            </li>


                                        </div>
                                    </div>
                                </div>
                            </nav>

                        </div>
                        <div class="card m-1" style="height: 20vh;">
                            <div class="card-body bg-teal-500 text-black text-center">
                                <h4 style="font-size:16px; font-weight:400;">{{ $post->post }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center mt-3">
        {{ $posts->links() }}
    </div>
        </div>
    </div>
    <style>
        .female {
            background-color: rgb(255, 55, 222));
        }

        .male {
            background-color: rgb(67, 101, 250);
        }
    </style>
@endsection
