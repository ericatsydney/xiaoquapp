<!DOCTYPE html>
<html>
@include('layouts.admin-head')
<body>
<div class="wrapper">
  @if (Session::has('flash_message'))
    <div class='alert {{ Session::get('alert-class', 'alert-info') }}'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      {{ Session::get('flash_message') }}
    </div>
  @endif
  @yield('content')
</div>
</body>
</html>
