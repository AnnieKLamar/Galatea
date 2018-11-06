@extends('head_foot')
@section('title')
Results
@stop
@section('content')
<div class="container">
  <ul class="list-group list-group-flush">
    @foreach($sections as $section)
      <li class="list-group-item">
        @foreach($section->authors()->get() as $author)
          @if($author->author_last_name != "")
            {{$author->author_last_name}}, {{$author->author_first_name}}
              @if(substr($author->author_first_name, -1) !== ".")
              .
              @endif
          @endif
        @endforeach

        <i>{{$section->title}}.</i>
        @foreach($section->source()->first()->publishers()->get() as $publisher)
            
          {{$publisher->publisher_name}},
            
        @endforeach
        @if($section->source()->first()->editors())
          edited by
        @endif
        @foreach($section->source()->first()->editors()->get() as $editor)
          @if($editor->editor_last_name != "")
            {{$editor->editor_first_name}} {{$editor->editor_last_name}},
          @endif
        @endforeach

        {{$section->source()->first()->year}}.
        @if($section->page_start != "")
          pp. {{$section->page_start}}-{{$section->page_end}}
        @endif
      </li>

    @endforeach
    
      @foreach($sources as $source)
        <li class="list-group-item">
          @foreach($source->editors()->get() as $editor)
            @if($editor->editor_last_name != "")
              {{$editor->editor_last_name}}, {{$editor->editor_first_name}}
              @if(substr($editor->editor_first_name, -1) !== ".").
              @endif
            @endif
            
          @endforeach
          @if($source->editors()->first()->editor_last_name != "")
            edited by
          @endif
          @foreach($source->editors()->get() as $editor)
            @if($editor->editor_last_name != "")
              {{$editor->editor_first_name}} {{$editor->editor_last_name}},
            @endif
          @endforeach
          <i>{{$source->name}}.</i>
          @foreach($source->publishers()->get() as $publisher)
            
              {{$publisher->publisher_name}},
            
          @endforeach
          {{$source->year}}.
          
        </li>
      @endforeach
    
  </ul>
</div>
@stop