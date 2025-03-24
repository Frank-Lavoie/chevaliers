<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}
