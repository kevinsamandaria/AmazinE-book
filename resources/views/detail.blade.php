@extends('layout.master')

@section('content')
<div class="container">
    <h1 class=" text-center">{{$books->title}}</h1>
    <p class="fst-italic text-center">{{__('string.by')}}: {{$books->author}}</p>

    <h4 class="fs-1">{{__('string.description')}}</h4>
    <div class="row">
        <div class="col-8">
            <p class="overflow-auto">{{$books->description}}</p>
        </div>
    </div>
    <div class="d-grid gap-3 d-md-block mx-auto float-end">
        <form action="/cart" method="POST">
            @csrf
            <button class="btn btn-outline-success btn-lg" type="submit">{{__('string.rent')}}</button>
            <input type="hidden" value="{{$books->id}}" name="id">
        </form>
    </div>
</div>
@endsection
