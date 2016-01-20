<div class="form-group">
  {!! Form::label('title', '小区名') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '例：珠江帝景湾']) !!}
</div>
<div class="form-group">
  <label>省份</label>
  <select class="form-control" name='province'>
    <option>广东</option>
    <option>上海</option>
    <option>北京</option>
    <option>浙江</option>
    <option>江苏</option>
    <option>山东</option>
  </select>
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
