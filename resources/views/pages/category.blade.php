@extends('base')

@section('content')
    <div class="container">

        <button class="nav-item dropdown inline-block text-sm px-4 py-2 bg-teal-500 leading-none border rounded text-green border-white hover:border-transparent hover:text-teal-500 hover:bg-teal-600 mt-4 lg:mt-0" 
             style="width: 120px; top: -10px; left: 61.5rem">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
            <ul class="dropdown-menu">
                @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
                    <li><a class="dropdown-item"
                            href="{{ url('categories', ['id' => $category->id]) }}">{{ $category->category }}</a>
                    </li>
                @endforeach
            </ul>
        </button>

            <div class="row" style="height: 100vh; overflow: auto">
                @foreach ($posts as $post)
                    <div class="col-md-4 ">

                        <div class="card {{ $post->user->gender === 'female' ? 'female' : 'male' }}">
                            <div class="card bg-white">
                                <nav class="navbar navbar-expand-lg text-center text-info mb-2">
                                    <div class="container-fluid " style="font-weight: bold; font-size:20px">
                                            {{ $post->user->name }}</a>

                                        <div class="collapse navbar-collapse" id="navbarNavAlt">
                                            <div class="navbar-nav ms-auto">
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="#" role="button"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        {{ $post->category->category }}
                                                    </a>
                                                </li>


                                            </div>
                                        </div>
                                    </div>
                                </nav>

                            </div>
                            <div class="card mx-auto mt-3 mb-4" style="height: 20vh; width:300px;">
                                <div class="card-body bg-secondary rounded">
                                    <h4 class="text-white text-center" style="font-weight:400; font-size:16px;">{{ $post->post }}</h4>
                                </div>
                            </div>

                            <div class="footer">

                            </div>
                        </div>
                        

                    </div>
                @endforeach 
                <div class="d-flex" style="margin-top: -70px">
                {{ $posts->links() }}
            </div> 
            </div>
           
    </div>
    <style>
        .female {
            background-color: rgb(255, 55, 222);
        }

        .male {
            background-color: rgb(67, 101, 250);
        }
    </style>
@endsection
