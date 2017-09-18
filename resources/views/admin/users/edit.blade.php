@extends('layouts.admin')


@section('content')
<h1>Create Users</h1>
<div class = "row">
<div class="col-sm-3">
    <img  src="{{ $user->photo ? $user->photo->file : '/images/profile.jpg'}}" class= "img-responsive img-rounded" />
</div>


<div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
    <div class = "form-group">
        {!!Form::label('name','Name:')!!}
        {!!Form::text('name', null, ['class'=>'form-control'])!!}
    </div>
    <div class = 'form-group'>
        {!!Form::label('email','Email:')!!}
        {!!Form::email('email', null, ['class'=>'form-control'])!!}
    </div>
    <div class = 'form-group'>
        {!!Form::label('role_id','Role:')!!}
        {!!Form::select('role_id', $roles, null, ['class'=>'form-control'])!!}
    </div>
    <div class = 'form-group'>
        {!!Form::label('password','Password:')!!}
        {!!Form::password('password', ['class'=>'form-control'])!!}
    </div>
    <div class = 'form-group'>
        {!!Form::label('photo_id','Photo:')!!}
        {!!Form::file('photo_id', null, ['class'=>'form-control'])!!}
    </div>
    <div class = 'form-group'>
        {!!Form::label('is_activ','Status:')!!}
        {!!Form::select('is_activ', array(1=>'Active', 0 =>'Not active'), null, ['class'=>'form-control'])!!}
    </div>
    <div class = "form-group">
        {!!Form::submit('Edit User',['class'=>'btn btn primary'])!!}
    </div>
    {!! Form::close()!!}
     
    </div>
    </div>
       @include('includes.forms_error')
@stop