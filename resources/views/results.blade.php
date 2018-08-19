@extends('head_foot')
@section('title')
Results
@stop
@section('content')
  @foreach($sections as $section)
    @foreach($section->authors()->get() as $author)
      <p>{{$author->author_first_name}} {{$author->author_last_name}}</p>
    @endforeach
  @endforeach
  @foreach($sources as $source)
    <p>{{$source->name}}</p>
  @endforeach
@stop