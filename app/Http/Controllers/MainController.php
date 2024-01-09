<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }
    
    public function about() {
        return view('about');
    }

    public function treners() {
        return view('treners');
    }

    public function tarifs() {
        return view('tarifs');
    }

    public function review() {
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:50',
            'subject' => 'required|min:2|max:100',
            'message' => 'required|min:5|max:500'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }    

    public function enter() {
        return view('enter');
    }
}


