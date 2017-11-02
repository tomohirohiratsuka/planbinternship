@extends('welcome')

@section('content')
<input type="text" class="text">
<button class="post">投稿</button>
 <ul class="lists">
   @foreach ($memos as $memo)
   <li>
    {{$memo->text}}
  </li>
  @endforeach
 </ul>

 <script src="{{asset('assets/javascripts/comment.js') }}"></script>
 <script>
   $('.post').on('click', function(){
          postComment($('.text').val())
    });
 </script>
 @endsection