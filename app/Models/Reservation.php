<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Reservation extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_reservation';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_reservation', 'id_customer', 'id_venue', 'check_in', 'check_out', 'days_count', 'price', 'id_transaction', 'desc'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'id_venue');
    }
}