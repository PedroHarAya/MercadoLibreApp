<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use HasFactory, SoftDeletes;
  protected $table = 'categories';
  protected $primaryKey = 'id';
  public $timestamps = true;

  protected $fillable = [
      'name',
      'created_at',
      'updated_at',
      'deleted_at'
  ];

  public function product() {
    return $this->hasMany(Product::class, 'id_category');
  }
}
