<?php
/**
 * Created by PhpStorm.
 * User: 彭益海
 * Date: 2018/3/23
 * Time: 19:28
 */

namespace App\Models;



class Comments extends BaseModel
{
    protected $fillable = [
        'user_id', 'post_id','body'
    ];

    public function generaluser()
    {
        return $this->belongsTo(Generaluser::class,'user_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}