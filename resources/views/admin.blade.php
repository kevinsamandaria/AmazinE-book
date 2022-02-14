@extends('layout.master')

@section('content')
<div class="container-md">
    @if($user->isEmpty())
        <p class="d-flex justify-content-center text-danger fs-4">{{__('string.nodata')}}</p>
    @else
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th class="col-4">{{__('string.account')}}</th>
                        <th class="col-4">{{__('string.role')}}</th>
                        <th class="col-4">{{__('string.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $u)
                    <tr>
                        <td class="col-6">
                            {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}
                        </td>
                        <td class="col-3">
                            {{$u->role->role_desc}}
                        </td>
                        <td class="col-3">
                            <div class="row">
                                <div class="col-4">
                                    <form action="/userDelete" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="id">
                                        <button type="submit" class="btn btn-danger">{{__('string.delete')}}</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-success" href="/updatePage/{{$u->id}}" role="button">{{__('string.update')}}</a>
                                </form>
                            </div>
                        </td>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            {{$user->links()}}
        </div>
    </div>
   @endif
</div>
@endsection
