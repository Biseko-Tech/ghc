<?php

namespace App\Models;

use App\Models\RentCategory;
use App\Models\PaymentInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'birthDate' => 'datetime',
        'commencementDate' => 'datetime',
        'endDate' => 'datetime',
    ];

    public function RentCategory()
    {
        return $this->belongsTo(RentCategory::class);
    }

    public function PaymentInterval()
    {
        return $this->belongsTo(PaymentInterval::class);
    }
}
