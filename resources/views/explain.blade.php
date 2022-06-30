<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Museum</title>
        <link href="/css/parts.css" rel="stylesheet">
        <link href="/css/explain.css" rel="stylesheet">
        <script src="/js/explain.js"></script>
        
    </head>
    <body>
        <section id="title">
            <h1>Welocome to Art Museum</h1> 
        </section>
        <section></section>
            <div id='container'>
               <div class="content">
                   <div class="img">
                        <img class="adjust" src=" {{ asset('storage/images/'.$art->id.'post.jpeg') }}"/>    
                   </div>
                   <div class="name">
                        <p> {{$art->title}} </p>
                   </div>
                   <div class="body">
                        <p>{{ $art->body}}</p>
                   </div>
                   <ol class="Quiz">
                        <li> {{$art->ans1}} </li> 
                        <li> {{$art->ans2}} </li> 
                        <li> {{$art->ans3}} </li> 
                        <li> {{$art->ans4}} </li> 
                   </ol>
                   <div class="back">
                       <a href="/">ホームに戻る</a>
                   </div>
               </div>
            </div>
        </section>
        
    </body>
</html>
