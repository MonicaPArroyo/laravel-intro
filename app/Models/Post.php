<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getExcerptAttribute() {
        return substr($this->body, 0, 120);
    }
    public function getPublishedAtAttribute() {
        return $this->created_at->format('d/m/Y');
    }
}
