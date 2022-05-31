<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_contacts extends Model
{
    use HasFactory;
    protected $tabel = "user_contacts";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name' , 'phone_number' , 'email' , 'status' ];
}
