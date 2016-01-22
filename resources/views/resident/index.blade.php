@extends('layouts.admin--form')

@section('form')
                <ul>
                  @foreach ($residents as $resident)
                    <li>
                      <a href="{{ url('/residents/'. $resident->id. '/edit') }}">{{ $resident->unit_number }}</a>
                    </li>
                  @endforeach
                </ul>
@endsection