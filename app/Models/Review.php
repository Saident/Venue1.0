<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Review extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
      'review', 'id_customer', 'id_venue'
   ];

   /**
    * The attributes excluded from the model's JSON form.
    *
    * @var string[]
    */

   public function venue()
   {
      return $this->belongsTo(venue::class, 'id_venue');
   }
}