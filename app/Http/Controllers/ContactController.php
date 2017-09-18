<?php

namespace App\Http\Controllers;
use App\Mail\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index');
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
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'phone' =>  'required|numeric',
        'message' => 'required'
      ]);

      $user= array('name' => $request->name,'email'=>$request->email,'phone'=> $request->phone,'message'=>$request->message );
      Mail::to('NovaUniversitasX@gmail.com')->send(new Contact($user));

      /*Mail::send('emails.contact', request()->all(), function ($message) {
       $message->subject('Website Contact');
       $message->to(config('mail.from.address'));
       $message->replyTo(request()->input('email'));
     });*/

     /*$email = $request->email;

      Mail::send('emails.info', $data, function ($message) use ($email) {

          $message->from('myemail@gmail.com', 'My Email');
          $message->to($email)->subject('The subject');
      });*/

      return response()->json([
           'status' => 'success',
           'code' => 200,
           'courses'=> $user,
           'message' => 'Se envio bien el correo'
       ]);
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
        //
    }
}
