<?php

namespace App\Models;
// app/Models/Order.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'city_from',
        'city_to',
        'price',
        'order_images',
        'company_id',
    ];

    protected $casts = [
        'order_images' => 'json',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

