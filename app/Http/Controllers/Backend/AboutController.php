<?php

namespace App\Http\Controllers\backend;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =About::all()->first();
        return view('backend.about.index')->with('data',$data);
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
        if ($request->hasFile('about_file'))
        {
            $request->validate(
                [
                    'about_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                    'about_title' => 'required',
                    'about_content' => 'required',

                ]);
            $file_name=uniqid().'.'.$request->about_file->getClientOriginalExtension();
            $request->about_file->move(public_path('images/about'),$file_name);

            $about=About::where('id',$id)->update(
                [
                    "about_title" => $request->about_title,
                    "about_file" => $file_name,
                    "about_content" => $request->about_content,
                    "about_facebook" => $request->about_facebook,
                    "about_twitter" => $request->about_twitter,
                    "about_instagram" => $request->about_instagram,
                    "about_linkedin" => $request->about_linkedin,
                ]
            );
            $path='images/about/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        else
        {
            $about=About::where('id',$id)->update(
                [
                    "about_title" => $request->about_title,
                    "about_content" => $request->about_content,
                    "about_facebook" => $request->about_facebook,
                    "about_twitter" => $request->about_twitter,
                    "about_instagram" => $request->about_instagram,
                    "about_linkedin" => $request->about_linkedin,
                ]
            );
        }

        if ($about)
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
        //
    }
}
