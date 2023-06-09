<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'transactions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const PAYMENT_METHOD_SELECT = [
        'CARD' => 'Card',
        'CASH' => 'Cash',
    ];

    public const PAYMENT_STATUS_SELECT = [
        'COMPLETED' => 'Completed',
        'PENDING'   => 'Pending',
        'FAILED'    => 'Failed',
    ];

    protected $fillable = [
        'user_id',
        'booking_id',
        'payment_status',
        'payment_amount',
        'payment_method',
        'payment_details',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
