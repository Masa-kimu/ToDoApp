<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $test = User::find(1);
        $user = Auth::user();

        $folder = $user->folders()->first();

        if(is_null($folder)){
            return view('home');
        }

        return redirect()->route('tasks.index', [
            'folder' => $folder->id,
        ]);
    }
}
