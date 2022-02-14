@extends('layout.master')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            {{__('string.uprole')}}
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="col-5 d-flex justify-content-center">
                <img src="{{asset('storage/'.$user->picture)}}" class="rounded mx-auto d-block" alt="..." width="150px" height="150px">
            </div>
            <form action="/updateRole" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">{{__('string.role')}}</label>
                    <select class="form-select @error('role_id') is-invalid @enderror" name="role_id">
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">{{__('string.uprole')}}</button>
                <input type="hidden" value="{{$user->id}}" name="user_id">
            </form>
        </div>
    </div>
</div>
@endsection
