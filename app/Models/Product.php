<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $casts = [
        'properties' => 'array'
    ];

    protected $fillable = [
        'name',
        'price',
        'properties'
    ];

    public function setPropertiesAttribute($value)
    {
        $properties = [];
        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $properties[] = $array_item;
            }
        }
        $this->attributes['properties'] = json_encode($properties);
    }
}
