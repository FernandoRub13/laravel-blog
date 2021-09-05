{{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['autocomplete' => 'off', 'class' => 'form-control', 'placeholder' => 'Enter the post\'s name', 'id' => 'namePost', 'onInput' => 'slugify()']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug\'s name', 'id' => 'slugPost', 'readonly']) !!}
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category', []) !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <p class="fotn-weight-bold">Etiquetas</p>
                @foreach ($tags as $tag)
                    <label class="mr-3">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
                @error('tags')
                    <br>
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <p class="font-weight-bold">State</p>
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Draft
                </label>
                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicated
                </label>
                @error('status')
                    <br>
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col float-right">
                    <div class="image-wrapper">
                        @isset($post->image)
                            
                        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                        
                        @else
                        
                        <img id="picture" src="https://icoconvert.com/images/noimage2.png" alt="">
                        @endisset
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Post\'s image') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quas sunt labore molestiae cumque
                        debitis impedit quasi eveniet eaque perferendis! Corrupti sit ut hic repudiandae, dolor voluptatum
                        sunt voluptates temporibus!</p>
                </div>
            </div>
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('extract', 'Extract') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            </div>
            @error('extract')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror