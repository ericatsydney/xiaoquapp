@extends('layouts.admin--form')

@section('form')
                <ul>
                  @foreach ($users as $user)
                    <li>
                      名称：{{ $user->name }}   | 邮件：{{ $user->email }}
                    </li>
                  @endforeach
                </ul>
@endsection