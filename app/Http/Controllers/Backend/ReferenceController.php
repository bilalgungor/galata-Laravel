<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['reference']=Reference::all();
        return view('backend.reference.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('ref_file'))
        {
            $request->validate(
                [
                    'ref_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                ]);
            $file_name=uniqid().'.'.$request->ref_file->getClientOriginalExtension();
            $request->ref_file->move(public_path('images/ref'),$file_name);
        }
        else
        {
            $file_name=null;
        }

        $ref=Reference::insert(
            [
                "ref_title" => $request->ref_title,
                "ref_url" => $request->ref_url,
                "ref_file" => $file_name,
            ]
        );
        if ($ref)
        {
            return redirect(route('reference.index'))->with('success','İşlem Başarılı');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref = Reference::find(intval($id));
        if ($ref->delete()) {
            $path = 'images/ref/' . $ref->ref_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
            echo 1;
        }
        echo 0;
    }
}
