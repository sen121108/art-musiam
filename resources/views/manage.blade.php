<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Museum</title>
        <link href="/css/manage.css" rel="stylesheet">
        <script src="/js/manage.js"></script>
         <link href="/css/parts.css" rel="stylesheet">
        <script src="/js/parts.js"></script>
        
        
    </head>
    <body>
        <section id="title">
            <h1>Welocome to Art Museum</h1> 
            
        </section>
        <section>
            <h1>新規作成ページ</h1>
            <div class="make">
                
                <form onsubmit="return check()" action="/posts" method="POST" enctype='multipart/form-data' >
                @csrf
                
                 <div class="content">
                    <h2>Image</h2>
                    <input type="file" accept=".jpg,.jpeg,.png" name="art[image]" placeholder="画像" value="{{ old('art.image') }}" />
                    <p class="image_error" style="color:red">{{ $errors ->first('art.image') }}</p>
                </div>
                 <div class="content">
                    <h2>Title of Painting</h2>
                    <input type="text" name="art[title]" placeholder="作品タイトル" value="{{ old('art.title') }}" />
                    <p class="title_error" style="color:red">{{ $errors ->first('art.title') }}</p>
                </div>
                 <div class="content">
                    <h2>name of writing painting</h2>
                    <input type="text" name="art[name]" placeholder="著者" value="{{ old('art.name') }}" />
                    <p class="name_error" style="color:red">{{ $errors ->first('art.name') }}</p>
                </div>
                 <div class="content">
                    <h2>explain of painting</h2>
                    <textarea name="art[body]" placeholder="説明" value="{{ old('art.body') }}" ></textarea>
                    <p class="body_error" style="color:red">{{ $errors ->first('art.body') }}</p>
                </div>
                <div class="content">
                    <h2>Ans1</h2>
                    <input type="text" name="art[ans1]" placeholder="答え1" value="{{ old('art.ans1') }}" />
                    <p class="ans1_error" style="color:red">{{ $errors ->first('art.ans1') }}</p>
                </div>
                <div class="content">
                    <h2>Ans2</h2>
                    <input type="text" name="art[ans2]" placeholder="答え2" value="{{ old('art.ans2') }}" />
                    <p class="ans2_error" style="color:red">{{ $errors ->first('art.ans2') }}</p>
                </div>
                <div class="content">
                    <h2>Ans3</h2>
                    <input type="text" name="art[ans3]" placeholder="答え3" value="{{ old('art.ans3') }}" />
                    <p class="ans3_error" style="color:red">{{ $errors ->first('art.ans3') }}</p>
                </div>
                <div class="content">
                    <h2>Ans4</h2>
                    <input type="text" name="art[ans4]" placeholder="答え４" value="{{ old('art.ans4') }}" />
                    <p class="ans4_error" style="color:red">{{ $errors ->first('art.ans4') }}</p>
                </div>
                <div class="post">
                    <input type="submit" value="投稿する"/>
                </div>
              </div>
            </form>
            <h3 id="goDelete">投稿の削除を行う</h3>
            <div id="delete">
                @foreach($arts as $art)
                <form action="/del/{{$art->id}}" id="form_{{$art->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>{{$art->id}}</p>
                    <p> {{$art->title}} </p>
                    <button type="submit" class="btn">投稿の削除する</button>
                    
                </form>
                @endforeach
            </div>
            <div class="back">
                <a href="/">投稿を見る</a>
                </div>
        </section>
        
    </body>
</html>
