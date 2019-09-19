@extends('layout.master')

@section('contents')
<div class="form">
<form action="{{route('snacks.create')}}" method="POST">
  @csrf
  <div class="field">
    <div class="field-label">
      <label for="link-url">URL:</label>
    </div>
    <div class="field-input">
      <input type="text" name="link_url" placeholder="http://..."/>
    </div>
  </div>
  <div class="field">
    <div class="field-label">
      <label for="name">商品名:</label>
    </div>
    <div class="field-input">
      <input type="text" name="name" placeholder="名前を入力してください"/>
    </div>
  </div>
  <div class="field">
    <div class="field-label">
      <label for="price">価格:</label>
    </div>
    <div class="field-input">
      <input type="text" name="price" placeholder="¥〇〇〇"/>
    </div>
  </div>
  <div class="field-area">
    <div class="field-label">
        <label for="explain">商品説明:</label>
      </div>
      <div class="field-input">
        <textarea rows="10" cols="60" name="explain"></textarea>
      </div>
  </div>
  <div class="field">
    <input type="submit" value="追加"/>
  </div>
</form>
</div>
@stop