<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyResidentRequest;
use App\Xiaoqu;
use Illuminate\Http\Request;
use App\Resident;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ResidentController extends Controller
{

  public function __construct()
  {
//    $this->middleware('auth', ['except' => ['verify']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $residents = Resident::all();
    return view('resident.index', compact('residents'), ['pageHeaderText' => '住户管理', 'panelHeadingText' => '住户列表', 'contentType' => 'residents']);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $xiaoqus = Xiaoqu::all(['id', 'title']);
    return view('resident.create', compact('xiaoqus'), ['pageHeaderText' => '住户管理', 'panelHeadingText' => '住户列表', 'contentType' => 'residents']);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $input = $request->all();
    Resident::create($input);
    session()->flash('flash_message', '新住户已成功创建!');
    return redirect('/residents/index');
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
    $resident = Resident::findOrFail($id);
    $xiaoqus = Xiaoqu::all(['id', 'title']);
    $xiaoqu_id = $resident->xiaoqu_id;
    return view('resident.edit', compact('resident', 'xiaoqus', 'xiaoqu_id'), ['pageHeaderText' => '住户管理', 'panelHeadingText' => '更改住户信息', 'contentType' => 'residents']);
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
    $resident = Resident::findOrFail($id);

    $resident->update($request->all());

    return redirect('/residents/index');
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

  /**
   * Verify the unit_number and identity provided
   *
   * @param VerifyResidentRequest $request
   * @return string The resident id.
   * The resident id.
   */
  public function verify(VerifyResidentRequest $request)
  {
    $return = array(
      'found' => false,
      'resident_id' => null,
      'errors' => ''
    );
    $result = Resident::where(['unit_number' => $request->unit_number, 'identity' => $request->identity])->first();

    if (isset($result)) {
      $return['found'] = true;
      $return['resident_id'] = $result->id;
    }else {
      $return['errors'] = '对不起，没有找到该住户信息，请重新输入。';
    }
    return $return;
  }
}
