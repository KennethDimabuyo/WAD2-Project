<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cat;
use App\User;
use Auth;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();

        return view('home', compact('cats'));
    }

    public function show($id)
    {
        $cat = Cat::find($id);
        $user = Auth::user()->getId();
        $comment = Comment::all();
        $comments = Comment::where('catCardId', $id)->get();

        return view ('Nekko/show', compact('cat','user','comments'));


    }

    public function showEdit($id)
    {
        $cat = Cat::find($id);

        return view ('Nekko/showEdit', compact('cat'));
    }

    public function edit(Request $request, $id)
    {
        $cat = Cat::find($id);
        $user = Auth::user()->getId();
        $file = Input::file('file');

        $cat->fullName = $request->fullName;
        $cat->address = $request->address;
        $cat->contactNumber = $request->contactNumber;
        $cat->catName = $request->catName;
        $cat->desc = $request->desc;
        

        if (Input::hasFile('file')) {
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
        }

        $cat->image = $file->getClientOriginalName();
        $cat->user_id = $user;
        $cat->save();

        return redirect ('home');
    }

    public function store(Request $request)
    {
        $user = Auth::user()->getId();
        $file = Input::file('file');
        $cat = new Cat;

        $cat->fullName = $request->fullName;
        $cat->address = $request->address;
        $cat->contactNumber = $request->contactNumber;
        $cat->catName = $request->catName;
        $cat->desc = $request->desc;
        

        if (Input::hasFile('file')) {
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
        }

        $cat->image = $file->getClientOriginalName();
        $cat->user_id = $user;
        $cat->save();


        
        return redirect ('home');

    }

    public function delete(Request $request, $id)
    {
        $cat = Cat::find($id)->delete();
        return redirect ('home');
    }
}
