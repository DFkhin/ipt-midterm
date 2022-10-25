@extends('base')

@section('content')
    <div class="container">
        <div class="row">

            <div class="mx-auto">
                <div class="search" style="position:relative; top: 1px;">
                    <div class="mx-auto" style="width:450px;">
                        <form action="{{ route('posts') }}" method="GET" role="search">
            
                            <div class="input-group mt-2">
                                <span class="input-group-btn mr-2 mt-0">
                                    <button class="btn" type="submit" title="Search Blog">
                                        <span class="text-dark"></span>
                                    </button>
                                </span>
                                <input type="text" class="form-control mr-2" name="post" placeholder="Search Blogs" id="post">
                                <a href="{{ route('posts') }}" class=" mt-0">
                                </a>

                                 
                            </div>
                        </form>
                        <button class="nav-item dropdown inline-block text-sm px-4 py-2 bg-teal-500 leading-none border rounded text-green border-white hover:border-transparent hover:text-teal-500 hover:bg-teal-600 mt-4 lg:mt-0" style="width: 120px; top: -58px; left: 470px">
                                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Categories
                                    </a>
                                    <div class="dropdown-menu">
                                        @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
                                            <li><a class="dropdown-item"
                                                    href="{{ url('categories', ['id' => $category->id]) }}">{{ $category->category }}</a>
                                            </li>
                                        @endforeach
                                        </div>
                        </button>
                    </div>
               </div>
            </div>
  
             
         <div class="card-header">
                <h3 class="inline-block text-sm px-4 py-2 leading-none border rounded text-light border-white hover:border-transparent hover:text-teal-500 hover:bg-teal-600 mt-4 lg:mt-0">Recent Blogs</h3>
            </div>
        <div class="card bg-teal-500">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mt-1 mb-1">

                        <div class="card {{ $post->user->gender === 'female' ? 'female' : 'male' }}">
                            
                                <nav class="navbar navbar-expand-lg text-center text-white mb-2">
                                    <div class="container-fluid">
                                            {{ $post->user->name }}</a>

                                        <div class="collapse navbar-collapse" id="navbarNavAlt">
                                            <div class="navbar-nav ms-auto"> 
                                                <li class="nav-item">
                                                    <a class="nav-link text-inherit" href="#" role="button"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        {{ $post->category->category }}
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            <div class="" style="height: 20vh;">
                                <div class="text-inherit text-center">
                                    <h4 style="font-weight:600; font-size:16px;">{{ $post->post }}</h4>
                                </div>
                            </div>


                        </div>  

                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex mt-3" style="margin-left: 400px">
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
