<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 lg:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2012/03/04/00/18/alternative-21862_960_720.jpg @endif)">
                    
                    <div class="v-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->id}}. {{$post->name}}
                            </a>
                        </h1>
                        <div >
                            @foreach ($post->tags as $tag)
                                <a class="my-2 inline-block px-3 h-6 bg-indigo-600 text-white rounded-full" href="{{route('posts.tag', $tag)}}">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>