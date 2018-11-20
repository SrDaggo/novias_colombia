<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $municipios = DB::table('municipios')->get();
        return view('users.edit', compact('user', 'municipios'));
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
        $data = request()->validate(
            [
                'name' => 'required|min:2|max:100',
                'phone' => 'nullable|regex:/[0-9]{11}/',
                'about_me' => 'nullable|min:10',
                'gender' => 'required|in:male,female,other',
                'partner_gender' => 'nullable|in:male,female,other',
                'partner_name' => 'nullable|min:2|max:100',
                'marrige_date' => 'required|date',
                'expected_guests' => 'nullable|min:1|integer',
                'wedding_hour_start' => 'nullable|integer|between:0,23',
                'wedding_minute_start' => 'nullable|integer|between:0,59',
                'wedding_hour_finish' => 'nullable|integer|between:0,23',
                'wedding_minute_finish' => 'nullable|integer|between:0,59',
                //MOSCA CON ESTOS, AUN ESTAN POR MODIFICARSE
                'wedding_color' => 'nullable|string|in:white,blue,yellow',
                'wedding_style' => 'nullable|string|in:night,modern,elegant,beach',
                'wedding_weather' => 'nullable|string|in:winter,summer,autumn,spring',

            ]
        );
        $user = User::find($id);

        $user->update($data);
        return back();
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
