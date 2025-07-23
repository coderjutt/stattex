<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubService;
use App\Models\Services;
use App\Models\Products;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class FrontendController extends Controller
{
    public function index(){
      $services=Services::with('subservice')->take(3)->get();
      $product=Products::take(5)->get();

        return view('frontend/index',compact('services','product'));
    }
     public function about(){
        return view('frontend/about');
    }
     public function services(){
      $services=Services::with('subservice')->get();
        return view('frontend/services',compact('services'));
    }
      public function product(){
        $product=Products::get();
        return view('frontend/product',compact('product'));
    }
      public function contact(){
        return view('frontend/contact');
    }

    public function submitContactForm(Request $request)
{
  
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255', // Validate subject
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];
    $subject = $request->subject;
    Mail::to('startex577@gmail.com')->send(new ContactFormMail($details,$subject));

    return back()->with('success', 'Your message has been sent successfully!');
}

}
