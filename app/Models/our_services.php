<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class our_services extends Model
{
    use HasFactory;
    protected $tabel = "our_services";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['image' , 'title' , 'description',];
}
