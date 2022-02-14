<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "gender";

    public function users()
    {
        return $this->hasMany(users::class);
    }
}
