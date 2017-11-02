@extends('welcome')

@section('content')
<div class="tab-menu">
  <ul>
    <li id="left" class="selected">左たぶ</li>
    <li id="right">右たぶ</li>
  </ul>

  <div class="contents">
    <div class="left">
      <p>お花コンテンツ</p>
    </div>
    <div class="right">
      <p>お魚コンテンツ</p>
    </div>
  </div>
</div>
@endsection