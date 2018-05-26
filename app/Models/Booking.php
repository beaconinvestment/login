<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Payment;


class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'type',
        'block',
        'total_price',
        'size',
        'booking_date',
        'total_installments',
        'installment_amount',
        'society',
        'confirmation_after'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'block' => 'string',
        'size' => 'string',
        'society' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'total_price' => 'required|integer',
        'size' => 'required',
        'booking_date' => 'required|date',
        'total_installments' => 'required|integer',
        'installment_amount' => 'required|integer',
        'confirmation_after' => 'required|integer'
    ];

    public function payments(){

        return $this->hasmany(payment::class);
    }
    public function user(){

        return $this->belongsTo(user::class);
    }
}
