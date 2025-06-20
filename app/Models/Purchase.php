<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
  use HasFactory, SoftDeletes;
  protected $table = 'purchases';
  public $timestamps = true;

  protected $fillable = [
    'id_user',
    'id_product',
    'item_amount',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function product() {
    return $this->belongsTo(Product::class);
  }
}
