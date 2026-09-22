<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
   protected $fillable = [
      'category_id',
      'supplier_id',
      'name',
      'slug',
      'sku',
      'barcode',
      'description',
      'cost_price',
      'selling_price',
      'stock_quantity',
      'low_stock_alert',
      'status'
   ];

   public function category(): BelongsTo
   {
      return $this->belongsTo(Category::class);
   }

   public function supplier(): BelongsTo
   {
      return $this->belongsTo(Supplier::class);
   }

   public function images(): HasMany
   {
      return $this->hasMany(ProductImage::class);
   }

   public function cartItems(): HasMany
   {
      return $this->hasMany(CartItem::class);
   }

   public function orderItems(): HasMany
   {
      return $this->hasMany(OrderItem::class);
   }
}
