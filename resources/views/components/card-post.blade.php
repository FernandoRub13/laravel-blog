@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
    
    @else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2012/03/04/00/18/alternative-21862_960_720.jpg" alt="">
        
    @endif
    <div class="px-6 py-3">
        <h1 class="font-bold text-xl mb-4">
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->id }}. {{ $post->name }}
            </a>
        </h1>
        {!!$post->extract!!}
        <div class="px-6 pt-4 pb-2" >
            @foreach ($post->tags as $tag)
                <a class="my-2 inline-block px-3 h-6 bg-gray-400 text-white rounded-full" href="{{route('posts.tag', $tag)}}">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</article>