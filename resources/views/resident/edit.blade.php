@extends('layouts.admin--form')

@section('form')
  {!! Form::model($resident, ['method' => 'PATCH', 'action' => ['ResidentController@update' , $resident->id]]) !!}
    <div class="form-group">
      {!! Form::label('xiaoqu_id', '所在小区') !!}
      <select class="form-control" name="xiaoqu_id">
        @foreach ($xiaoqus as $xiaoqu)
          @if($xiaoqu_id == $xiaoqu->id )
            <option value="{{ $xiaoqu->id }}" selected>{{ $xiaoqu->title }}</option>
          @else
            <option value="{{ $xiaoqu->id }} ">{{ $xiaoqu->title }}</option>
          @endif
        @endforeach
      </select>
    </div>
    @include('resident._form')
  {!! Form::close() !!}
@endsection