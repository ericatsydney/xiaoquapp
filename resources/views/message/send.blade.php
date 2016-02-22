@extends('layouts.admin--form')
<?php  header('Access-Control-Allow-Origin:http://xiaoquapp.app:8000'); ?>
<?php  header('Access-Control-Allow-Credentials:true'); ?>
@section('form')
  {!! Form::open(['url' => 'https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=' . $accessToken,
  'id' => 'sendMessageForm',
  'enctype' => 'application/json']) !!}
  <div class="form-group">
    {!! Form::label('title', '消息标题') !!}
    {!! Form::text('title', '测试标题', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('content', '消息标题') !!}
    {!! Form::text('content', '测试内容', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::hidden('thumb_media_id', 'qI6_Ze_6PtV7svjolgs-rN6stStuHIjs9_DidOHaj0Q-mwvBelOXCFZiq2OsIU-p') !!}
    {!! Form::hidden('author', 'Eric Tan') !!}
    {!! Form::hidden('content_source_url', 'www.qq.com') !!}
    {!! Form::hidden('digest', 'digest') !!}
    {!! Form::hidden('show_cover_pic', '0') !!}
  </div>
  <button type="submit" class="btn btn-default">递交</button>
  <button type="reset" class="btn btn-default">重设</button>
  {!! Form::close() !!}
@endsection