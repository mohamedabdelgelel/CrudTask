<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasMany('employees');
    }
    /**
     * Get Image relationship
     */
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
