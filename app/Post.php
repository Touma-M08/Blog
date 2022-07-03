<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limit_count) {
        return $this->orderBy("updated_at", "desc")->paginate($limit_count);
    }
}
