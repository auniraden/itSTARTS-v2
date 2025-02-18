<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['homeschooler_id', 'title', 'description', 'link'];

    public function homeschooler()
    {
        return $this->belongsTo(Homeschooler::class);
    }
}
