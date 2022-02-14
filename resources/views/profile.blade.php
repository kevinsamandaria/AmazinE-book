@extends('layout.master')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            {{__('string.upprofile')}}
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="col-5 d-flex justify-content-center">
                <img src="{{asset('storage/'.$user->picture)}}" class="rounded mx-auto d-block" alt="..." width="150px" height="150px">
            </div>
            <form action="/updateProfile" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('string.first')}}</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('string.middle')}}</label>
                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}">
                    @error('middle_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('string.last')}}</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">{{__('string.gender')}}</label>
                    <select class="form-select @error('gender_id') is-invalid @enderror" name="gender_id">
                        <option value="1">{{__('string.male')}}</option>
                        <option value="2">{{__('string.female')}}</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('string.email')}}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">{{__('string.picture')}}</label>
                    <input class="form-control @error('picture') is-invalid @enderror" type="file" id="picture" name="picture">
                    @error('picture')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('string.password')}}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('string.confpassword')}}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{__('string.upprofile')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection
