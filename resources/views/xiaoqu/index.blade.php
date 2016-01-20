@extends('layouts.admin--form')

@section('form')
                <ul>
                  @foreach ($xiaoqus as $xiaoqu)
                    <li>
                      <a href="{{ url('/xiaoqus/'. $xiaoqu->id. '/edit') }}">{{ $xiaoqu->title }}</a>
                    </li>
                  @endforeach
                </ul>
@endsection