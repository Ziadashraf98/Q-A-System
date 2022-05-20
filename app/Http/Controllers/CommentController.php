<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $user = Auth::user();
        $data = new Comment; 
        $data->user_id = $user->id;
        $data->save();
        return back();
    }

}
