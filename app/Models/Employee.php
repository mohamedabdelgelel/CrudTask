<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
