<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

$table->create('Product', function (Blueprint $table) {
    $table->integer('product_id');
    $table->foreign('product_id')->references('id_product')->on('Product');
    $table->timestamps();
});

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function variants() {
        return $this->hasMany(Variant::class);
    }
    
}
