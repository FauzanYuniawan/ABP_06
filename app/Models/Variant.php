<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

$table->create('Variants', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->string('processor');
    $table->string('memory');
    $table->string('storage');
    $table->integer('product_id');
    $table->foreignId('product_id')->constrained();
    $table->timestamps();
    $table->foreign('product_id')->references('id_product')->on('Product');
});


class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'processor',
        'memory',
        'storage'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
