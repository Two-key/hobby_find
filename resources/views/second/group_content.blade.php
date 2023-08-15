<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        
        <form action="/{{$group->id}}/user_like" method="POST">
            @csrf
            <input type="submit" value="気になる"/>
        </form>
        
    @auth
  <!-- Review.phpに作ったisLikedByメソッドをここで使用 -->
  @if (!$group->isLikedBy(Auth::user()))
    <span class="likes">
        <i class="fas fa-music like-toggle" data-group-id="{{ $item->id }}"></i>
      <span class="like-counter">{{$item->likes_count}}</span>
    </span><!-- /.likes -->
  @else
    <span class="likes">
        <i class="fas fa-music heart like-toggle liked" data-group-id="{{ $item->id }}"></i>
      <span class="like-counter">{{$item->likes_count}}</span>
    </span><!-- /.likes -->
  @endif
@endauth
@guest
  <span class="likes">
      <i class="fas fa-music heart"></i>
    <span class="like-counter">{{$item->likes_count}}</span>
  </span><!-- /.likes -->
@endguest
    </div>
        
        <a href='/group_content/{{$group->id}}/post_create'>create</a>
        
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