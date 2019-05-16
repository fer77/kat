<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUsController extends Controller
{
    // auth before being accessed.

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUS::create($request->all());

        \Mail::send(
            'emails.contactus',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) use ($request) {
                $message->from('onlineinterviewquestions@gmail.com');
                $message->to('54579caa09-e4121e@inbox.mailtrap.io', 'Admin');
            }
        );

        return back()->with('success', 'Thanks for contacting us!');
    }
    public function show($id)
    {
        return abort(404);
    }
}
