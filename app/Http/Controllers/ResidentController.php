<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyResidentRequest;
use Illuminate\Http\Request;
use App\Resident;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResidentController extends Controller
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
    //
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
      'resident_id' => null
    );
    $result = Resident::where(['unit_number' => $request->unit_number, 'identity' => $request->identity])->first();

    if (isset($result)) {
      $return = array(
        'found' => true,
        'resident_id' => $result->id
      );
    }
    return $return;
  }
}
