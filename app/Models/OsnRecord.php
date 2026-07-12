<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OsnRecord extends Model
{
    //
    public function importLog(){
        return $this->belongsTo(ImportLog::class);
    }
}
