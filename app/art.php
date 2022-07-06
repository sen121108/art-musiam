<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class art extends Model
{
    protected $fillable= [
    'image',
    'title',
    'body',
    'name',
    'ans1',
    'ans2',
    'ans3',
    'ans4',
    
    ];
    
    public function getPaginateByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}

