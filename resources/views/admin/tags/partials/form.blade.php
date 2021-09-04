<div class="form-group">
    {!! Form::label('name', 'Name', []) !!}
    {!! Form::text('name', null, ['autocomplete' => 'off', 'class' => 'form-control', 'placeholder' => 'Enter the name of the tag', 'id' => 'nameTag', 'onInput' => 'slugify()']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', []) !!}
    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Enter the slug of the tag', 'id' => 'slugTag', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>