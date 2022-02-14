<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $guarded = ['id'];
    
    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function book()
    {
        return $this->belongsTo(book::class);
    }
}
