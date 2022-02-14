@extends('layout.master')

@section('content')
<div class="container">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>{{__('string.author')}}</th>
                <th>{{__('string.title')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">
                    <a href="/detail/{{$book->id}}" class="text-dark fw-normal" style="text-decoration: none">
                        {{ $book->title }}
                    </a>
                </th>
                <th class="col-4 text-dark fw-normal">
                    {{ $book->author }}
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$books->links()}}
    </div>
</div>
@endsection
