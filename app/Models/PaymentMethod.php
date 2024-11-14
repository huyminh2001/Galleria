<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model{

    protected $table = 'payment_method';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}
?>