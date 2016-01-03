@extends('layouts.master')

@section('content')
  <form id="verify_resident" method="POST" action="/resident/verify">
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

  <form id="user_register" method="POST" action="/auth/login" style="display:none">
    {!! csrf_field() !!}

    <div>
      Name
      <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
      Email
      <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
      Password
      <input type="password" name="password">
    </div>

    <div>
      Confirm Password
      <input type="password" name="password_confirmation">
    </div>

    <div>
      <button type="submit">Register</button>
    </div>
  </form>
@endsection