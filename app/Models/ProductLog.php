<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLog extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at', // يتم إدارته تلقائيًا
        'updated_at', // يتم إدارته تلقائيًا
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
