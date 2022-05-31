<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_media_info extends Model
{
    use HasFactory;
    protected $table = 'contact_media_infos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['code' , 'title_link' , 'title' , 'description' ];
}
