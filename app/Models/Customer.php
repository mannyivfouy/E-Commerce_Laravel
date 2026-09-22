<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
   protected $fillable = [
      'fullname',
      'email',
      'password',
      'phone',
      'address',
      'avatar',
      'status'
   ];

   protected $hidden = [
      'password'
   ];

   protected function casts(): array
   {
      return [
         'password' => 'hashed',
      ];
   }

   public function carts(): HasMany
   {
      return $this->hasMany(Cart::class);
   }
}
