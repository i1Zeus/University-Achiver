<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_path', 'file_path', 'state', 'address', 'start', 'end'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###

    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###
    
            ### image ###

    //add_image
    public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/events/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/events/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/events/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/events/' . $this->id . '/images/' . $name;
        $this->save();
    }

    ### End image ###
}
