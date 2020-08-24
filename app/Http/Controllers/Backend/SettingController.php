<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat1=Setting::where('settings_category',1)->get();
        $cat2=Setting::where('settings_category',2)->get();
        $cat3=Setting::where('settings_category',3)->get();
        $cat4=Setting::where('settings_category',4)->get();
        $cat6=Setting::where('settings_category',6)->get();
        $cat7=Setting::where('settings_category',7)->get();
        return view('backend.settings.index')
            ->with('cat1',$cat1)
            ->with('cat2',$cat2)
            ->with('cat3',$cat3)
            ->with('cat4',$cat4)
            ->with('cat6',$cat6)
            ->with('cat7',$cat7);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $settings=Setting::where('id',$id)->first();
        return view('backend.settings.edit')->with('settings',$settings);
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
        if ($request->hasFile('settings_value'))
        {
            $request->validate([
                'settings_value' =>'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $file_name=uniqid().'.'.$request->settings_value->getClientOriginalExtension();
            $request->settings_value->move(public_path('images/settings'),$file_name);
            $request->settings_value=$file_name;
        }
        $settings=Setting::Where('id',$id)->update(
            [
                "settings_value" => $request->settings_value
            ]
        );
        if ($settings)
        {
            $path='images/settings/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
            return redirect(route('settings.index'))->with('success','İşlem Başarılı');
        }
        return back()->with("error","Düzenleme İşlemi Başarısız");
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
