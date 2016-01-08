@extends('layouts.master')

@section('content')
  <div class='row'>
    <div class='col-xs-12 col-md-4 col-md-offset-4 form-wrapper'>
      <h1>MOKO登录</h1>

      <form method='POST' action='/auth/login'>
        {!! csrf_field() !!}

        <div class='form-group'>
          <label>电邮</label>
          <input type='email' name='email'  class='form-control'>
        </div>

        <div class='form-group'>
          <label>密码</label>
          <input type='password' name='password' id='password'  class='form-control'>
        </div>

        <div>
          <button type='submit'  class='btn btn-primary btn-lg btn-block'>登录</button>
        </div>
      </form>
    </div>
    <!-- end of form-wrapper -->
  </div> <!-- end of row -->
@endsection