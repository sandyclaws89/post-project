@extends('layouts.base')
@section('pageTitle', 'Posts List')
@section('pageMain')
<div class="d-flex flex-wrap container justify-content-center">
        @foreach ($posts as $post)
{{-- <div class="flex-center position-ref full-height"> --}}
    @auth
    <div class="card my-5 mx-3" style="width: 20rem;">
        <img src="{{$post->image }}" class="card-img-top" alt="{{$post->title}}">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $post->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-around ">
                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary text-white">details</a>
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary text-white">edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('admin.show') }}" class="btn btn-danger text-white">delete</a>
                </form>
            </div>
        </div>
    @endauth
    {{-- @guest
   <div class="card text-center" style="width: 18rem;">
        <img src="{{$post->image }}" class="card-img-top" alt="{{$post->title}}">
        <div class="card-body text-center">
            <h5 class="card-title text-center">{{ $post->title }}</h5>
            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
    </div>
   @endguest --}}
</div>
    @endforeach

@endsection
