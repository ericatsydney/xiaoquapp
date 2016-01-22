@extends('layouts.admin--form')

@section('form')
  {!! Form::model($xiaoqu, ['method' => 'PATCH', 'action' => ['XiaoquController@update' , $xiaoqu->id]]) !!}
  @include('xiaoqu._form')
  {!! Form::close() !!}
@endsection