@extends('layouts.admin')


@section('content')

<h1>Users</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img height ="50" src="{{$user->photo ? $user->photo->file : '/images/profile.jpg'}}"/></td>
        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <th>{{$user->role->name}}</th>
        <th>{{$user->is_activ ==1 ? 'Is Active' : 'Not Active'}}</th>
        <th>{{$user->created_at -> diffForHumans()}}</th>
        <th>{{$user->updated_at -> diffForHumans()}}</th>
      </tr>
        @endforeach
      @endif
    </tbody>
  </table>

@stop;