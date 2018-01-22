@extends('layouts.app')
@section('content')
  <h1>Message ({{($messages->total())}})</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <div class="panel panel-info">
        <div class="panel-heading">From {{$message->firstname." ".$message->lastname}}</div>
        <div class="panel-body">{{$message->message}}</div>
      </div>
    @endforeach
    {{ $messages->links() }}
  @endif
@endsection
