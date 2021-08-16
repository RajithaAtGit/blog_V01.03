@props(['post'])

<a href="/author/{{ $post->author->username }}">
    <div class="flex items-center text-sm">
        <img src="{{asset('images/lary-avatar.svg')}}" alt="Lary avatar">
        <div class="ml-3">
            <h5 class="font-bold">{{ $post->author->name }}</h5>
            <h6>Mascot at Laracasts</h6>
        </div>
    </div>
</a>
