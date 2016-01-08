<!DOCTYPE html>
<html>
@include('layouts.page-head')
<body>
<div class="container">
  @if (Session::has('flash_message'))
    <div class='alert {{ Session::get('alert-class', 'alert-info') }}'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      {{ Session::get('flash_message') }}
      {{--{% for msg in Session::get('flash_message') %}--}}
      {{--<p><i class="fa-fw fa fa-check"></i> {{ msg }}</p>--}}
      {{--{% endfor %}--}}
    </div>
  @endif
    <div class='ajax-message alert alert-danger collapse'>
      <button type='button' class='close' data-dismiss='alert'
              aria-hidden='true'>&times;</button>
    </div>
  @yield('content')
</div>
</body>
</html>
