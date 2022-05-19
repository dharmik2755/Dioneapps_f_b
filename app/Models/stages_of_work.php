<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stages_of_work extends Model
{
    use HasFactory;
    protected $tabel = "stages_of_works";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'sub_title' , 
                            'stages1' ,'description1',
                            'stages2' ,'description2',
                            'stages3' ,'description3',
                            'stages4' ,'description4'];

}
