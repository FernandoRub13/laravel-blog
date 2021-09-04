@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Edit post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($post,['route' => ['admin.posts.update', $post], 'files' => true, 'method' => 'PUT']) !!}
            @include('admin.posts.partials.form')
            {!! Form::submit('Update post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-wrapper {
            postion: relative;
            max-width: 300px;
        }

        .image-wrapper img {
            postion: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
@stop

@section('js')
    <script>
        // Slugify a string
        function slugify(str) {
            let nameCat = document.getElementById('namePost');
            let slugCat = document.getElementById('slugPost');
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
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>

@stop
