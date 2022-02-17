<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "tb_customer";
    protected $id = "customer_id";
    protected $fillablr = ['contact_name','address','city'];
}
