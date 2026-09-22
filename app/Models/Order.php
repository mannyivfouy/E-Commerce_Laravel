<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
   protected $fillable = [
      'customer_id',
      'order_number',
      'subtotal',
      'discount',
      'tax',
      'shipping_fee',
      'total',
      'status',
      'shipping_address',
      'note'
   ];

   protected function casts(): array
   {
      return [
         'subtotal' => 'decimal:2',
         'discount' => 'decimal:2',
         'tax' => 'decimal:2',
         'shipping_fee' => 'decimal:2',
         'total' => 'decimal:2',
      ];
   }

   public function customer(): BelongsTo
   {
      return $this->belongsTo(Customer::class);
   }

   public function items(): HasMany
   {
      return $this->hasMany(OrderItem::class);
   }

   public function payment(): HasOne
   {
      return $this->hasOne(Payment::class);
   }
}
