<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Museum</title>
        <link rel="icon" type="image/png" href="/images/art.jpeg">　
        <link href="/css/parts.css" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet">
        <script src="/js/parts.js"></script>
        <script src="/js/index.js"></script>
        
    </head>
    <body>
        <section id="title">
            <h1 >Sen's Art Museum</h1> 
            
            
        </section>
        <section>
           
            <div class="animeStress">
                <h2>Tap the painting you are interested in</h2>    
            </div>
            
            <div id='container'>
                
                @foreach($arts as $art)
                <div class="pushChangeColor">
                   
                       <div class="content-name">
                           <p>{{ $art -> title }}</p>
                       </div>
                       <div class="content-img" ></div>
                       <a href="/explain/{{$art->id }}"><img class="adjust" src=" {{ asset('storage/images/'.$art->id.'post.jpeg') }}"/></a> 
                </div>
                @endforeach
            </div>
             <div class="make">
                    <a href ="/manage">Regist as Manager </a>
            </div>
        </section>
        
    </body>
</html>
