<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_path', 'file_path', 'state', 'address', 'start_at', 'end_at'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
