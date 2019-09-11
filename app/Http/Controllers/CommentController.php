<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
class CommentController extends Controller
{
    public function comment ($id) {
       $comment = comment::create([

           'user_id' => auth()->id(),

           'post_id' => $id,

           'comment' => request('comment'),
       ])->save();

       return redirect()->route('verPosts');
    }

    public function delete ($id) {
   		$comment = comment::destroy($id);

   		return redirect()->route('verPosts'); 
    }

}
