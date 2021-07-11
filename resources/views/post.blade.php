<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p><a href="/category/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
        <p> {{ $post->body }} </p>
    </article>
    <a href="/posts">Go Back</a>
</x-layout>
