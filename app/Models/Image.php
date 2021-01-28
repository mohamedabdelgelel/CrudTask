<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function employees()
    {
        return $this->hasMany('employees');
    }
    public function companies()
    {
        return $this->hasMany('companies');
    }
}
