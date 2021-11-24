<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troquel extends Model
{
    use HasFactory;

    protected $table = 'troqueles';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tipotroquel()
    {
        return $this->belongsTo(Tipotroquel::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

}
