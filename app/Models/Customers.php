<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customers extends Model
{
    use HasFactory, Notifiable;


    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'NIK',
        'nama_customer',
        'email',
        'country',
    ];

    public $timestamp = false;
}
