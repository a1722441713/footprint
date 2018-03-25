<?php

namespace App\Http\Controllers\Frontend\Web;

use App\Models\Generaluser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function verify($token)
    {
        $user =Generaluser::where('confirmation_token',$token)->first();

        if(is_null($user)){
            return redirect('');
        }

        $user->is_active =1;
        $user->confirmation_token = str_random(40);
        $user->save();
        Auth::guard('frontend_web')->login($user);
        return redirect('');
    }
}
