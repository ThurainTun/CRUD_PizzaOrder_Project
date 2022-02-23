<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizzas extends Model
{
    use HasFactory;
    protected $fillable=['user_name','email','pizza_name','topping','sauce','price'];
}
