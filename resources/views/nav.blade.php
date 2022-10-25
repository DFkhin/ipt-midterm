<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
      <span class="font-semibold text-xl tracking-tight">Green Wheels</span>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        @if (auth()->check())
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Dashboard
        </a>
        <a href="/posts" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Blogs
        </a>
        <a href="/users" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
          Users
        </a>
        <a href="/user/create" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white ml-5">
          Create Blogs  
        </a>
        <div class="inline-block text-sm px-4 py-2 leading-none border rounded text-green border-white hover:border-transparent hover:text-teal-500 hover:bg-teal-600 mt-4 lg:mt-0" style="margin-left: 38rem">
            <li class="nav-item dropdown btn btn-sm">
                <a class="nav-link dropdown-toggle text-light" style="font-weight: bold" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name}}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item"
                            href="{{ url('users', ['id' => auth()->user()->id]) }}">{{ __('My Blogs') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ '/logout' }}">{{ __('Logout') }}</a></li>
                </ul>
            </li>
            </div>
    @else
    <div class="flex auto p-2">
        <a class="nav-link text-light " style="margin-left: 60rem;" href="/login">Login</a>
        <a class="nav-link text-light " style="margin-left: 20px;" href="/register">Register</a>
    </div>

    @endif

      </div>
    
      </div>
    </div>
</nav>