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

    // public function add_file($file, $type = 1)
    // { 
    //     $type = $type == 1 ? 'images' : 'files';
    //     $ext = $file->extension();
    //     $name = \Str::random(10) . '.' . $ext;
    //     $file = $file->storeAs('public/event/' . $this->id . '/' . $type . '/' , $name);
    //     if ($type == 'images')
    //         $this->image_path = $name;
    //     else $this->file_path = $name;

    //     $this->save();
    // }
}
