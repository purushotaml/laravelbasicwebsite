@extends('layouts.app')
@section('content')
<h1>CONTACT</h1>
{!! Form::open(['url' => 'contact/submit', 'method' => 'POST']) !!}
<div class="form-group">
  {!! Form::label('firstname','First Name') !!}
  {!! Form::text('firstname', '',['class' => 'form-control','placeholder' => 'Please Enter Your First Name']) !!}
</div>
<div class="form-group">
  {!! Form::label('lastname','Last Name') !!}
  {!! Form::text('lastname', '',['class' => 'form-control','placeholder' => 'Please Enter Your Last Name']) !!}
</div>
<div class="form-group">
  {!! Form::label('email','E-Mail Address') !!}
  {!! Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter Your E-Mail Address']) !!}
</div>
<div class="form-group">
  {!! Form::label('message','Message') !!}
  {!! Form::textarea('message', '',['class' => 'form-control','placeholder' => 'Type your message']) !!}
</div>
  {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
@endsection
