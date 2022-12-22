<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team_management extends Model
{
    use HasFactory;
    protected $tabel = "team_managements";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [ 'team_member' ,'firstname' ,'lastname' ,'email' ,'number' ,'position' ,'education' ,'birthdate' ,'image' ,'status_id' ,'status' ];

    
}
