<?php

namespace App;

use App\Shop\Customers\Customer;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message'];

    public function user()
    {
        return $this->belongsTo(Customer::class);
    }
}
