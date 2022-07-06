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
                <h1>Sen's Art Museum</h1>
              
        </section>
        <section>
            
            <div id='container'>
               <div class="content">
                   <div class="img">
                        <img class="adjust moveimg"  src=" {{ asset('storage/images/'.$art->id.'post.jpeg') }}"/>    
                   </div>
                   <div class="name">
                        <p> {{$art->title}} </p>
                   </div>
                   <div class="body">
                        <p>who was" {{ $art->title}} " written by ? </p>
                   </div>
                   
                   <div class="makeBorder">
                       <span id="getId" data-id = "{{ $art->id }}"></span>
                       <ol class="Quiz">
                            <li><p class="ans" data-num = 1>{{$art->ans1}}</p></li> 
                            <li><p class="ans" data-num = 2> {{$art->ans2}}</p></li>
                            <li><p class="ans" data-num = 3> {{$art->ans3}}</p></li>
                            <li><p class="ans" data-num = 4> {{$art->ans4}}</p></li>
                       </ol>
                   </div>
                   <div id=check>
                       <h1>大正解！！やったね☺️</h1>
                       <h1>惜しい！！もう一度挑戦だ！！🔥</h1>
                   </div>
                   <div id="answer">
                       <h2>　Answer　</h2>
                       <p> {{$art->title}}：　{{ $art->name }} </p>
                       <p> {{$art->body}} </p>
                       
                   </div>
                   <div class="back">
                       <a href="/">ホームに戻る</a>
                   </div>
               </div>
            </div>
        </section>
        
    </body>
</html>
