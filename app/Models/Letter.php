<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = array(
        'no_agenda','no_dokumen','asal_dokumen','perihal','file'
    );

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
