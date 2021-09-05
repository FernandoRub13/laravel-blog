@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Edit role's user</h1>
@stop

@section('content')

@if (session('info'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
  </svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      {{session('info')}}
    </div>
  </div>
@endif
<div class="card">
    <div class="card-body">
        <p class="h5">Name</p>
        <p class="form-control">{{$user->name}}</p>

        <h2>Role's list</h2>

        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
            @foreach ($roles as $role)
                <div>
                    <label for="">
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Assign rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop