@extends('layouts.master')

@section('content')
  <form method="POST" action="/resident/verify">
    {!! csrf_field() !!}
    <div>
      房号
      <input type="text" name="unit_number" value="{{ old('unit_number') }}">
    </div>

    <div>
      身份证号
      <input type="text" name="identity" id="identity">
    </div>

    <div>
      <button type="submit">递交</button>
    </div>
  </form>

  {{--<form method="POST" action="/auth/login">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div>--}}
      {{--邮件--}}
      {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
      {{--密码--}}
      {{--<input type="password" name="password" id="password">--}}
    {{--</div>--}}

    {{--<div>--}}
      {{--<input type="checkbox" name="remember" class="hidden">--}}
    {{--</div>--}}

    {{--<div>--}}
      {{--<button type="submit">登录</button>--}}
    {{--</div>--}}
  {{--</form>--}}
@endsection