<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

}