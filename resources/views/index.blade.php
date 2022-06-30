<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Museum</title>
        <link href="/css/index.css" rel="stylesheet">
        <script src="/js/index.js"></script>
        
    </head>
    <body>
        <section id="title">
            <h1>Welocome to Art Museum</h1> 
            <h2><span style = "color:red;">Tap</span> the painting you are interested in</h2>
        </section>
        <section>
            @foreach($arts as $art)
            <div id='container'>
                <div class="content">
                   <a href="">
                       <p>{{ $art -> title }}</p>
                       <img class="adjust" src=" {{ asset('storage/images/'.$art->image) }}"/>
                   </a> 
                </div>
                  </div>
            @endforeach
        </section>
        
    </body>
</html>
