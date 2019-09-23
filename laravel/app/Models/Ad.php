<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'description', 'img_url'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
