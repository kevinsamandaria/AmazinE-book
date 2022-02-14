@extends('layout.master')

@section('content')
<div class="container-md">
    @if($cart->isEmpty())
    <p class="d-flex justify-content-center text-danger fs-4">
        {{__('string.nodata')}}
    </p>
    @else
    <table class="table table-bordered table-hover border border-secondary">
        <thead>
            <tr class="table-primary border border-secondary">
                <th class="col-10 text-center">{{__('string.title')}}</th>
                <th class="text-center">{{__('string.delete')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $c)
            <tr>
                <td class="col-10">
                    {{$c->book->title}}
                </td>
                <td>
                 <form action="/cartDelete" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">{{__('string.delete')}}</button>
                        <input type="hidden" value="{{$c->id}}" name="id">
                        <input type="hidden" value="{{$c->title}}" name="name">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="/submitCart" method="post">
        @csrf
        <button type="submit" class="btn btn-success">{{__('string.submit')}}</button>
    </form>
    @endif
</div>
@endsection
