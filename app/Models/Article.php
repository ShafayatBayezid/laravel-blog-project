<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'thumbnail'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
