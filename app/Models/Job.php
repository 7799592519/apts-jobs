<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'qualification',
        'total_posts',
        'last_date',
        'apply_link'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
