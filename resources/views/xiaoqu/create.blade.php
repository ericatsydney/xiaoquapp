@extends('layouts.admin--form')

@section('form')
  {!! Form::open(['url' => '/xiaoqus']) !!}
  @include('xiaoqu._form')
  {!! Form::close() !!}
@endsection