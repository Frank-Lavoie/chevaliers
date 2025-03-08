<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}
