<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlatform extends Model
{
    use HasFactory;
    
    public function games()
    {
        return $this->morphedByMany(Games::class);
    }
    
    public function platform()
    {
        return $this->morphedByMany(Platform::class);
    }
}
