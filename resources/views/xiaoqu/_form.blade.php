<div class="form-group">
  {!! Form::label('title', '小区名') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '例：珠江帝景湾']) !!}
</div>
<div class="form-group">
  {!! Form::label('province', '省份') !!}
  {!! Form::select('province',
      ['gd' => '广东',
      'sh' => '上海',
      'bj' => '北京',
      'zj' => '浙江',
      'js' => '江苏',
      'sd' => '山东'],
   null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('city', '城市') !!}
  {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => '例：江门']) !!}
</div>
<div class="form-group">
  {!! Form::label('address', '地址') !!}
  {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('postcode', '邮编') !!}
  {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '例：529000']) !!}
</div>
<div class="row">
  <div class="form-group col-lg-6">
    <label for="disabledSelect">经度(开发中)</label>
    <input class="form-control" id="disabledInput" type="text"
           placeholder="Disabled input" disabled>
  </div>
  <div class="form-group col-lg-6">
    <label for="disabledSelect">纬度(开发中)</label>
    <input class="form-control" id="disabledInput" type="text"
           placeholder="Disabled input" disabled>
  </div>
</div>
{!! Form::submit('递交', ['class' => 'btn btn-default']) !!}
{!! Form::reset('重设', ['class' => 'btn btn-default']) !!}
