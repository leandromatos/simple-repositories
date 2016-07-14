<?php

namespace App\Product\Models;

use App\Product\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
