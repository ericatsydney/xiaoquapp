@extends('layouts.master')

@section('content')
  <div class='row'>
    <div class='col-xs-12 col-md-4 col-md-offset-4 form-wrapper'>
      <h1>创建属于你的MOKO</h1>

      <form id='verify_resident' method='POST' action='/resident/verify'>
        {!! csrf_field() !!}
        <div class='form-group'>
          <label>房号</label>
          <input type='text' name='unit_number' class='form-control'>
        </div>

        <div class='form-group'>
          <label>身份证号</label>
          <input type='text' name='identity' class='form-control' id='identity'>
        </div>

        <div>
          <button type='submit' class='btn btn-primary btn-lg btn-block'>递交
          </button>
        </div>
      </form>

      <form id='user_register' method='POST' action='/auth/register'
            style='display: none;'>
        {!! csrf_field() !!}

        <div class='form-group'>
          <label>昵称</label>
          <input type='text' name='name' class='form-control'>
        </div>

        <div class='form-group'>
          <label>电邮</label>
          <input type='email' name='email' class='form-control'>
        </div>

        <div class='form-group'>
          <label>密码</label>
          <input type='password' class='form-control' name='password'>
        </div>

        <div class='form-group'>
          <label>确认密码</label>
          <input type='password' class='form-control'
                 name='password_confirmation'>
        </div>

        <div>
          <button type='submit' class='btn btn-primary btn-lg btn-block'>
            创建账号
          </button>
        </div>
      </form>
    </div> <!-- end of form-wrapper -->
  </div> <!-- end of row -->
@endsection