<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'estado',
        'sigla'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function cidades() {
        return $this->hasMany(Cidade::class);
    }
}
