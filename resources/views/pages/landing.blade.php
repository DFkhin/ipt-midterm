@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-teal-500">Welcome to my Blog</h1>
    </div>
@endsection
<style>
    .container {
        background-image: url("/img/cover.jpg");
        background-repeat: no-repeat;
        width: 120rem;
        height: 30rem;
        margin-top: 20px;
    }
    .container h1 {
        margin-left: 300px;
    }
</style>