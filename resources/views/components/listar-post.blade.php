<div>
    @if($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('posts.show', ['post'=> $post, 'user'=>$post->user]) }}">
                        <!--<img src="{{asset('uploads') .'/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}" style="border-radius: 10px;">-->
                        <img src="{{asset('uploads') .'/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}" class="post-image">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="my-10">
            {{$posts->links('')}}
        </div>
    @else
          <p class="text-center">No hay Post, sigue a alguien para poder mostrar sus posts</p>
    @endif
</div>