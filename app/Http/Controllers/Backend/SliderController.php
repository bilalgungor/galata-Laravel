<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slider']=Slider::all();
        return view('backend.slider.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('slider_file'))
        {
            $request->validate(
                [
                    'slider_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                    'slider_title' => 'required',
                ]);
            $file_name=uniqid().'.'.$request->slider_file->getClientOriginalExtension();
            $request->slider_file->move(public_path('images/slider'),$file_name);
        }
        else
        {
            $file_name=null;
        }

        $slider=Slider::insert(
            [
                "slider_title" => $request->slider_title,
                "slider_title2" => $request->slider_title2,
                "slider_slug" => $request->slider_slug,
                "slider_file" => $file_name,
                "slider_status" => $request->slider_status,
            ]
        );
        if ($slider)
        {
            return redirect(route('slider.index'))->with('success','İşlem Başarılı');
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
        $slider=Slider::where('id',$id)->first();
        return view('backend.slider.edit')->with('slider',$slider);
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

        if ($request->hasFile('slider_file'))
        {
            $request->validate(
                [
                    'slider_file' => 'required|image|mimes:jpg,jpeg,png',
                    'slider_title' => 'required',

                ]);
            $file_name=uniqid().'.'.$request->slider_file->getClientOriginalExtension();
            $request->slider_file->move(public_path('images/slider'),$file_name);

            $slider=Slider::where('id',$id)->update(
                [
                    "slider_title" => $request->slider_title,
                    "slider_title2" => $request->slider_title2,
                    "slider_slug" => $request->slider_slug,
                    "slider_file" => $file_name,
                    "slider_status" => $request->slider_status,
                ]
            );
            $path='images/slider/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        else
        {
            $slider=Slider::where('id',$id)->update(
                [
                    "slider_title" => $request->slider_title,
                    "slider_title2" => $request->slider_title2,
                    "slider_slug" => $request->slider_slug,
                    "slider_status" => $request->slider_status,
                ]
            );
        }

        if ($slider)
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
        $slider = Slider::find(intval($id));
        if ($slider->delete()) {
            $path = 'images/slider/' . $slider->slider_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
            echo 1;
        }
        echo 0;
    }
}
