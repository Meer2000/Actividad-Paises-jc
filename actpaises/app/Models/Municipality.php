<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    protected $table = 'municipalities';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'departments_id',
    ];

    public function departments()
    {
        return $this->belongsTo('App\Models\Department', 'departments_id');
    }
}
