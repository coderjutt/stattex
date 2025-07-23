<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Models\Subscriber;


class SubscriberController extends Controller
{

    // dashboard view
 public function index(){
    $subscribers=Subscriber::all();
    return view('dashboard.subscriber.index',compact('subscribers'));
 }   
 public function store(Request $request)
{
   
   $data= $request->validate([
        'email' => 'required|email|unique:subscribers,email',
        'website' => 'nullable|url'
    ]);

Subscriber::create($data);

    return redirect()->back()->with('success', 'Subscribed successfully!');
}


public function export()
{
    $subscribers = Subscriber::all();

    $response = new StreamedResponse(function () use ($subscribers) {
        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['Email', 'Website', 'Subscribed At']);

        foreach ($subscribers as $subscriber) {
            fputcsv($handle, [
                $subscriber->email,
                $subscriber->website,
                $subscriber->created_at,
            ]);
        }

        fclose($handle);
    });

    $response->headers->set('Content-Type', 'text/csv');
    $response->headers->set('Content-Disposition', 'attachment; filename="subscribers.csv"');

    return $response;
}
}
