<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_contact_Controllers extends Model
{
    use HasFactory;
    protected $tabel = "project_contact_Controllers";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title','description',];
}
