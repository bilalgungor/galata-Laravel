<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
        return view('backend.staff.index')->withStaff($staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate(
                [
                    'staff_name' =>'required',
                ]);

        $staff= Staff::insert(
            [
                "staff_name" => $request->staff_name,
                "staff_title" => $request->staff_title,
                "staff_content" => $request->staff_content,
                "staff_role" => $request->staff_role,

            ]);
        if ($staff)
        {
            return redirect(route('staff.index'))->with('success','Başarıyla Eklendi');
        }
        return back()->with('error','İşlem Başarısız');
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
        $staff = Staff::where('id',$id)->first();
        return view('backend.staff.edit')->with('staff',$staff);
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

            $request->validate(
                [
                    'staff_name' => 'required',
                ]);

            $staff=Staff::where('id',$id)->update(
                [
                    "staff_name" => $request->staff_name,
                    "staff_title" => $request->staff_title,
                    "staff_content" => $request->staff_content,
                    "staff_role" => $request->staff_role,
                ]
            );


        if ($staff)
        {
            return back()->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff=Staff::find(intval($id));
        if ($staff->delete())
        {
            echo 1;
        }
        echo 0;
    }
}
