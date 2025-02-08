<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Services extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [
        'name',
        'description',
        'available',
        'price_per_hour'
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'service_id');
    }
}
