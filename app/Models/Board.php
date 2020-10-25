<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

<<<<<<< HEAD

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

=======
>>>>>>> 11c056ad2bc9ae41d1826d4179f82646a8dad735
    public function getData()
    {
        return $this->id .':' . $this->title . '('
        .$this->person->name. ')';

    }

}
