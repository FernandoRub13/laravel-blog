@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Edit role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'PUT']) !!}

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the role\'s name ']) !!}
            @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            <h6 class="mt-2"><strong>Permission's list</strong></h2>
                @foreach ($permissions as $permission)
                    <div>
                        <label>
                            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                            {{ $permission->description }}
                        </label>
                    </div>
                @endforeach
            
                {!! Form::submit('Update role', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@stop
