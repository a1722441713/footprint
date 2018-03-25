<?php
/**
 * Created by PhpStorm.
 * User: 彭益海
 * Date: 2018/3/25
 * Time: 0:02
 */

namespace App\Repositories;


use App\Models\Comments;

class CommentRepository
{
    public function create(array $attributes)
    {
        return Comments::create($attributes);
    }

}