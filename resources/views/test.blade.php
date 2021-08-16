<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine Js</title>
    <script src="{{ mix('js/alpine.js') }}" defer></script>
</head>
<body>
<div style="width: 900px;margin-left: auto;margin-right: auto">
    @foreach($posts as $post)
        <div class="w-full mt-10 border-b-8 border-red-400"><h1>{{$post->title}}</h1>
            By<a href="/auther/{{$post->author->username}}"> {{$post->author->name}}</a> in
            <a href="//{{$post->category->slug}}"> {{$post->category->name}}</a>
            <p>
                {{$post->excerpt}}
            </p></div>
    @endforeach
</div>


</body>
</html>
