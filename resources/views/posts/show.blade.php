<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        
        <div class="text-lg text-gray-600 my-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure class="my-4">
                    <img class="w-full h-80 object-cover object-center" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2012/03/04/00/18/alternative-21862_960_720.jpg @endif" alt="">
                </figure>
                <div class="text-lg text-gray-600 mt-4">
                    {!!$post->body!!}
                </div>
            </div>
            {{-- Contenido relacionado --}}
            <aside >
                <h1 class=" text-2xl font-bold text-gray-600 mb-4">Related with{{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                <img class="w-40 h-20 object-cover grid-cols-3" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2012/03/04/00/18/alternative-21862_960_720.jpg @endif" alt="">
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

    </div>
</x-app-layout>