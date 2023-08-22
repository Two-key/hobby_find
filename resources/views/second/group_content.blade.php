<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <script src="{{ asset('js/like.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="https://cdn.tailwindcss.com"></script>
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="固有のコード" crossorigin="anonymous">-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .liked {
                color: pink;
                    }

        </style>
       
    </head>
    <body>
        <h1 class="title">
            {{ $group->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>グループの概要</h3>
                <p>{{ $group->overview }}</p>    
            </div>
        </div>
        
        
        <form action="/{{$group->id}}/user_join" method="POST">
            @csrf
            <input type="submit" value="仲間入りする"/>
        </form>
        
<div>  
    @auth
  
  @if (!$group->isJoinedBy(Auth::user())) 
    <span class="joins">
        <i class="fas fa-star join-toggle" data-group-id="{{ $group->id }}"></i>
    </span>
  @else
    <span class="joins">
        <i class="far fa-star join-toggle" data-group-id="{{ $group->id }}"></i>
    </span>
  @endif
@endauth
@guest
  <span class="joins">
      <i class="fas fa-music heart"></i>
  </span>
@endguest
    </div>
        
        <a href='/{{$group->id}}/group_talk'>トークする</a>
        
        
<div>  
    @auth
  <!-- Review.phpに作ったisLikedByメソッドをここで使用 -->
  @if (!$group->isLikedBy(Auth::user())) 
    <span class="likes">
        <i class="fas fa-music like-toggle" data-group-id="{{ $group->id }}"></i>
    </span><!-- /.likes -->
  @else
    <span class="likes">
        <i class="fas fa-music heart like-toggle liked" data-group-id="{{ $group->id }}"></i>
    </span><!-- /.likes -->
  @endif
@endauth
@guest
  <span class="likes">
      <i class="fas fa-music heart"></i>
  </span><!-- /.likes -->
@endguest
    </div>
        
          <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->comment }}</p>
                    <div>
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    </div>
                </div>
            @endforeach
             <div class='paginate'>
        </div>
        </div>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
