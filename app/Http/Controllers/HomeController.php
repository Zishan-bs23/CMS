<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        return view('home', [
            'sbus' => User::all()->pluck('sbu')->unique()->toArray()
        ]);
    }

    public function action(Request $request){

        if($request->ajax()){

            $user = User::find($request->id);

    		if($request->action == 'edit'){
    			$user->update([
                    'name'	=>	$request->name,
                    'email' => $request->email
                ]);
    		}

    		else if($request->action == 'delete'){
                $user->delete();
    		}

    		return response()->json($request);
    	}
    }
}
