<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{

    use HasFactory;

    protected $primaryKey = "id";

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [
        'start_book_date',
        'end_book_date',
        'payment_id',
        'user_id',
        'service_id',
        'total_price'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function services(): BelongsTo
    {
        return $this->belongsTo(Services::class, 'service_id');
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class, 'payment_id');
    }
}
