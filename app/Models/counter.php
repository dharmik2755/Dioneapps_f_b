<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class counter extends Model
{
    use HasFactory;
    protected $table = 'counter';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['clients' , 'projects' , 'employees' , 'branches'];
}
