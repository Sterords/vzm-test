<?php

namespace App\Http\Controllers;

use App\Models\UserComment;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;


class   HomeController extends Controller
{
    public function index ()
    {
        $comment = UserComment::orderBy('id')->get();
        return view ('home', [
            'comment' => $comment
        ]);
    }
}
