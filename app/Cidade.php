<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cidade'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function estados() {
        return $this->hasMany(Estado::class);
    }
}
