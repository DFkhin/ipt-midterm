@extends('base')

@section('content')
    <div class="container mt-5 p-5">
        <div class="row">
            @foreach ($users as $user)
            
                <div class="col-md-4 mb-1">
                    <div class="card p3 {{ $user->gender === 'female' ? 'female' : 'male' }}">
                        <div class="">
                                <ul class="text-center">
                            <a class="text-teal-300 text-center" style="text-decoration: none; font-size: 25px; font-weight: bold; align-items: center" href="{{ url('users', ['id' => $user->id]) }}">{{ $user->name }}</a>
                                </ul>
                            <p class="text-black text-center">Posts: {{ $user->posts()->count() }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="d-flex justify-content-start">
                {{ $users->links() }}
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
