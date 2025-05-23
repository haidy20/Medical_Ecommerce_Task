<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // استخدام guarded بدلاً من fillable
    protected $guarded = [
        'id',
        'created_at', // يتم إدارته تلقائيًا
        'updated_at', // يتم إدارته تلقائيًا
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
