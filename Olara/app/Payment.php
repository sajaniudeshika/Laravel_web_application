<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'cus_id','amount', 'date', 'payment_invoice_no','pay_method',
    ];
}
