<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog'] = Blog::all();
        return view('backend.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (strlen($request->blog_slug)>3)
        {
            $slug=Str::slug($request->blog_slug);
        }
        else
        {
            $slug=Str::slug($request->blog_title);
        }

        if ($request->hasFile('blog_file'))
        {
            $request->validate(
                [
                    'blog_file' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'blog_title' => 'required',
                    'blog_content' => 'required',

                ]);
            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move(public_path('images/blog'),$file_name);
        }
        else
        {
            $file_name=null;
        }

        $blog=Blog::insert(
            [
                "blog_title" => $request->blog_title,
                "blog_slug" => $slug,
                "blog_file" => $file_name,
                "blog_content" => $request->blog_content,
                "blog_status" => $request->blog_status,
            ]
        );

        if ($blog)
        {
            return redirect(route('blog.index'))->with('success','İşlem Başarılı');
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
        $blog=Blog::where('id',$id)->first();
        return view('backend.blog.edit')->with('blog',$blog);
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
        if (strlen($request->blog_slug)>3)
        {
            $slug=Str::slug($request->blog_slug);
        }
        else
        {
            $slug=Str::slug($request->blog_title);
        }

        if ($request->hasFile('blog_file'))
        {
            $request->validate(
                [
                    'blog_file' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'blog_title' => 'required',
                    'blog_content' => 'required',

                ]);
            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move(public_path('images/blog'),$file_name);

            $blog=Blog::where('id',$id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug,
                    "blog_file" => $file_name,
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );
            $path='images/blog/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        else
        {
            $blog=Blog::where('id',$id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug,
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );
        }

        if ($blog)
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
        $blog = Blog::find(intval($id));
        if ($blog->delete()) {
            $path = 'images/blog/' . $blog->blog_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
            echo 1;
        }
        echo 0;
    }
}
