<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class we_expert extends Model
{
    use HasFactory;
    protected $tabel = "we_experts";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title','description','image1', 'image2' , 'image3'];


    public function pcimage() {
        return $this->belongsTo('App\Models\project_collage');
    }


}




