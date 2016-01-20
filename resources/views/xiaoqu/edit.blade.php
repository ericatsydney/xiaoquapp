@extends('layouts.admin--form')

@section('form')
  {!! Form::model($xiaoqu, ['method' => 'PATCH', 'url' => '/xiaoqus/'.$xiaoqu->id]) !!}
  @include('xiaoqu._form')
  {!! Form::close() !!}
@endsection