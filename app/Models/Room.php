<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    protected $fillable = [
        'hotel_id',
        'room_type_id',
        'room_number',
        'price_per_night',
        'is_available',
        'images',           // جديد
        'description'       // جديد
    ];

    protected $casts = [
        'images' => 'array', // جديد (عشان نقدر نخزن أكتر من صورة)
        'is_available' => 'boolean',
    ];

    public function hotel(): BelongsTo
    { return $this->belongsTo(Hotel::class); }
    public function roomType(): BelongsTo  { return $this->belongsTo(RoomType::class); }
    public function bookings(): HasMany     { return $this->hasMany(Booking::class); }
}
