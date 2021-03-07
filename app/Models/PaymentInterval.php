<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentInterval extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
