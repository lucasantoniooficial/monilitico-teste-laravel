<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
    ];

    public function priceParse(): Attribute
    {
        return new Attribute(
            get: function() {
                $fmt = numfmt_create('pt-BR', \NumberFormatter::CURRENCY);

                return numfmt_format_currency($fmt, $this->price, 'BRL');
            }
        );
    }
}
