<div class="form-group">
  {!! Form::label('unit_number', '房号') !!}
  {!! Form::text('unit_number', null, ['class' => 'form-control', 'placeholder' => '例：紫荆庭402']) !!}
</div>
<div class="form-group">
  {!! Form::label('identity', '户主身份证后9位数字/字母') !!}
  {!! Form::text('identity', null, ['class' => 'form-control', 'placeholder' => '12345678x']) !!}
</div>
<button type="submit" class="btn btn-default">递交</button>
<button type="reset" class="btn btn-default">重设</button>