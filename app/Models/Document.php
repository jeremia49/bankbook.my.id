<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table='documents';
    protected $guarded = [ 'id' ];
    
    protected $casts = [
        'is_active' => 'boolean',
        'id' => 'int',
        'uid'=>'int',
    ];

    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'uid');
    }
}
