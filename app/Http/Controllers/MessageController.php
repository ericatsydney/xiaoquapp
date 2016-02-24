<?php

namespace App\Http\Controllers;

use App\WechatResource;
use CURLFile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $access_token = WechatResource::first()->access_token;
//    $type = 'image';
//    $filepath = 'SurfWaveBlue.jpg';
//    $file = curl_file_create($filepath);
//    dd($file);
//    $filedata = array(
//      'media' => curl_file_create($filepath),
//    );
//    $filedata = 'media=@SurfWaveBlue.jpg';
//    $url = "https://api.weixin.qq.com/cgi-bin/material/add_news?access_token=" . $access_token;
    $url = "https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=" . $access_token;
//    $url = "https://api.weixin.qq.com/cgi-bin/media/upload?access_token=" . $access_token
//    . '&type=' . $type;
//    $url = "https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=" . $access_token;
//    $filedata = array(
//        "type" => 'image',
//        "offset" => 0,
//        "count" => 20
//    );

//    dd(print_r($filedata, true));
    $content = 'this is a test demo';
//    $jsonArr = array(
//      "articles" => array(
//        array(
//          "title" => 'dingdingdemo',
////          "thumb_media_id" => 'xxxx',
//          "author" => 'martin',
//          "digest" => 'digest',
//          "show_cover_pic" => 0,
//          "content" => $content,
//          "content_source_url" => 'https://www.baidu.com/',
//        ),
//      ),
//    );

    $jsonArr = array(
      'filter' => array(
        "is_to_all" => true,
      ),
      "msgtype" => "text",
      "text" => array(
         "content" => 'Hello World',
      ),
    );
    $json3 = json_encode($jsonArr, JSON_UNESCAPED_UNICODE);
//    $json3 = $filedata;
//    dd($json3);
    $res = $this->https_request($url, $json3);
    $result = json_decode($res);
    dd($res);
    return view('message.send', ['accessToken' => $access_token, 'pageHeaderText' => '消息管理', 'panelHeadingText' => '发送消息', 'contentType' => 'message']);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

  private function https_request($url, $data = null)
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)) {
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
  }
}
