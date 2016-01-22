<?php

namespace App\Http\Controllers;

use App\Xiaoqu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class XiaoquController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xiaoqus = Xiaoqu::all();
        return view('xiaoqu.index', compact('xiaoqus'), ['pageHeaderText' => '小区管理', 'panelHeadingText' => '小区列表', 'contentType' => 'xiaoqus']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('xiaoqu.create', ['pageHeaderText' => '小区管理', 'panelHeadingText' => '新建小区','contentType' => 'xiaoqus']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Xiaoqu::create($input);
        session()->flash('flash_message', '小区已成功创建!');
        return redirect('/xiaoqus/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $xiaoqu = Xiaoqu::findOrFail($id);
        return view('xiaoqu.edit', compact('xiaoqu'), ['pageHeaderText' => '小区管理', 'panelHeadingText' => '更改小区' , 'contentType' => 'xiaoqus']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $xiaoqu = Xiaoqu::findOrFail($id);

        $xiaoqu->update($request->all());

        return redirect('/xiaoqus/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
