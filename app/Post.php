<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateBylimit(int $limit_count = ５ )
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
