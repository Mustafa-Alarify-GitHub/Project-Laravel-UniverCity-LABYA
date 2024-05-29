<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_student extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getCreatedAtAttribute($created_at)
    {
        return date("d", strtotime($created_at));
    }
}
