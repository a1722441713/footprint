<?php

namespace App\Http\Controllers\Frontend\Web;

use App\Models\Comments;
use App\Repositories\CommentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CommentController extends Controller
{
    protected $CommentRepository;

    public function __construct(CommentRepository $CommentRepository)
    {
        $this->CommentRepository = $CommentRepository;
    }

    public function store(Request $request,$post)
    {
        if(is_null(Auth::guard('frontend_web')->id())){
            $id = 0;
        }else{
            $id = Auth::guard('frontend_web')->id();
        }
        $date = [
            'user_id' => $id,
            'post_id' =>$post,
            'body' => $request->get('comment')
        ];
        $this->CommentRepository->create($date);
        return back();
    }
}
