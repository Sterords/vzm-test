<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\UserComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index (CommentRequest $req) {
        $value_comment = new UserComment();
        $value_comment->name = $req->input('name');
        $value_comment->comment = $req->input('comment');
        $value_comment->date = date('Y-m-d H:i:s');

        $value_comment->save();
        return redirect()->route('home');
    }
}
