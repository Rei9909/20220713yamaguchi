<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'content', 'created_at', 'updated_at'];

    public static $rules = array(
        'id' => 'required',
        'content' => 'required|min:0|max:12',
        'created_at' => 'required',
        'updated_at' => 'required'
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . '' . $this->created_at .  ' ' . $this->updated_at;
        return $txt;
    }
}
