<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reflection extends Model
{
    use HasFactory;

    protected $fillable = ['homeschooler_id', 'content', 'is_public'];

    public function homeschooler()
    {
        return $this->belongsTo(Homeschooler::class);
    }
}
