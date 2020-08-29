<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request){
        $message = new Message();
        // IT WORKS ALSO, BUT YOU NEED TO VERIFY THAT IT EXISTS
        // $message->title = $_POST['title'];
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return redirect('/');

        // IT'S ANOTHER WAY TO ACCES TO THE PROPERTY
        // $request->input('title');
    }

    public function view($id){
        $message = Message::findOrFail($id);

        return view('message', [
            'message' => $message
        ]);
    }
}