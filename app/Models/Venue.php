<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Venue extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
      'name', 'vendor', 'id_category', 'address', 'id_city', 'description', 'policy', 'picture', 'price', 'rating'
   ];

   /**
    * The attributes excluded from the model's JSON form.
    *
    * @var string[]
    */

   public function category()
   {
      return $this->belongsTo(Category::class, 'id_category');
   }
   public function city()
   {
      return $this->belongsTo(City::class, 'id_city');
   }

   public function facility()
   {
      return $this->belongsToMany(Facility::class, 'venue_facilities', 'id_venue', 'id_facility');
   }
   public function faq()
   {
      return $this->hasMany(Faq::class, 'id_venue');
   }
   public function review()
   {
      return $this->hasMany(Review::class, 'id_venue');
   }

   public function reservation()
   {
      return $this->hasMany(Reservation::class, 'id_venue');
   }
}