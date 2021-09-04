@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Create category</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name', []) !!}
                {!! Form::text('name', null, ['autocomplete' => 'off', 'class' => 'form-control', 'placeholder' => 'Enter the name of the category', 'id' => 'nameCategory', 'onInput' => 'slugify()']) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug', []) !!}
                {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Enter the slug of the category', 'id' => 'slugCategory', 'readonly']) !!}
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            {!! Form::submit('Create category', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script>
        // Slugify a string
        function slugify(str) {
            let nameCat = document.getElementById('nameCategory');
            let slugCat = document.getElementById('slugCategory');
            str = nameCat.value.replace(/^\s+|\s+$/g, '');

            // Make the string lowercase
            str = str.toLowerCase();

            // Remove accents, swap ñ for n, etc
            var from = "ÁÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆÍÌÎÏŇÑÓÖÒÔÕØŘŔŠŤÚŮÜÙÛÝŸŽáäâàãåčçćďéěëèêẽĕȇíìîïňñóöòôõøðřŕšťúůüùûýÿžþÞĐđßÆa·/_,:;";
            var to = "AAAAAACCCDEEEEEEEEIIIINNOOOOOORRSTUUUUUYYZaaaaaacccdeeeeeeeeiiiinnooooooorrstuuuuuyyzbBDdBAa------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            // Remove invalid chars
            str = str.replace(/[^a-z0-9 -]/g, '')
                // Collapse whitespace and replace by -
                .replace(/\s+/g, '-')
                // Collapse dashes
                .replace(/-+/g, '-');

            slugCat.value = str;
            // return str;
        }
    </script>
@stop
