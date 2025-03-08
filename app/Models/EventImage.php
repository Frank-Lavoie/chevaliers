<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Event;

class EventImage extends Model
{
    use HasFactory;
    protected $table = 'event_images';

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
