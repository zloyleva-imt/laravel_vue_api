<?php

namespace App\Models;

use App\Models\Traits\Pagination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ad extends Model
{
    use Pagination;

    protected $fillable = ['title', 'description', 'img_url', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getAll(Request $request){
        $query = $this->with('user')->orderByDesc('created_at');

        return $this->addPagination($query, $request->query());
    }
}
