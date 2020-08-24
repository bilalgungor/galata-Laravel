<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Blog;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Reference;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DefaultController extends Controller
{
    public function index()
    {
        $data = About::where('id',1)->first();
        $blog['blog'] = Blog::orderByRaw('RAND()')->take(4)->get();
        $data['slider'] = Slider::all()->sortBy('id');
        $customer['customer'] = Customer::orderByRaw('RAND()')->take(3)->get();
        $reference['reference'] = Reference::all();
        return view('frontend.default.index',compact('data'))
            ->with('blog',$blog)
            ->with('customer',$customer)
            ->with('reference',$reference);
    }

    public function contact()
    {
        return view('frontend.default.contact');
    }

    public function staff()
    {
        return view('frontend.default.staff');
    }

    public function ref()
    {
        return view('frontend.default.ref');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mail' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data=[
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('bilgi@galataihracat.com')->send(new SendMail($data));
        return back()->with('success','Mail Başarıyla Gönderildi');
    }


}
