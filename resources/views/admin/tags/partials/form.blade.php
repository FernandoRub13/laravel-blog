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
