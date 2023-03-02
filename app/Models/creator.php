<?php

namespace App\Models;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class creator extends Model
{
    use HasFactory;
    protected $guarded=[];

    function post(){
        return $this->hasMany(post::class);
    }
}
