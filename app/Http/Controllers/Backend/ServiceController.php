<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['service'] = Pages::all();
        return view('backend.service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        }
        else
        {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate(
                [
                    'page_file' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'page_title' => 'required',
                    'page_content' => 'required',

                ]);
            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('images/page'),$file_name);
        }
        else
        {
            $file_name=null;
        }

        $blog=Pages::insert(
            [
                "page_title" => $request->page_title,
                "page_slug" => $slug,
                "page_file" => $file_name,
                "page_content" => $request->page_content,
                "page_status" => $request->page_status,
                "page_must" => $request->page_must,
                "page_category" => $request->page_category,
            ]
        );

        if ($blog)
        {
            return redirect(route('service.index'))->with('success','İşlem Başarılı');
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
        $service=Pages::where('id',$id)->first();
        return view('backend.service.edit')->with('service',$service);
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
        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        }
        else
        {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate(
                [
                    'page_file' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'page_title' => 'required',
                    'page_content' => 'required',
                ]);
            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('images/page'),$file_name);

            $page=Pages::where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug,
                    "page_file" => $file_name,
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                    "page_must" => $request->page_must,
                    "page_category" => $request->page_category,
                ]
            );
            $path='images/page/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        else
        {
            $page=Pages::where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug,
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                    "page_must" => $request->page_must,
                    "page_category" => $request->page_category,
                ]
            );
        }

        if ($page)
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
