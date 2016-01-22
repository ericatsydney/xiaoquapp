@extends('layouts.admin--form')

@section('form')
  {!! Form::open(['url' => '/xiaoqus']) !!}
  <div class="form-group">
    {!! Form::label('xiaoqu_id', '所在小区') !!}
    <select class="form-control" name="xiaoqu_id">
      @foreach ($xiaoqus as $xiaoqu)
        <option value="{{ $xiaoqu->id }} ">{{ $xiaoqu->title }}</option>
      @endforeach
    </select>
  </div>
  @include('resident._form')
  {!! Form::close() !!}
@endsection