@extends('layout.master')
@section('contents')
<div class="list-group">
  @foreach($snacks as $snack)
  <P>{{$snack->name}}</P>
  <P>{{$snack->link_url}}</P>
  <P>{{$snack->explain}}</P>
  <P>{{$snack->price}}</P>
  @endforeach
</div>
@stop