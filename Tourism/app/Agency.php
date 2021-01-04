<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencyinfo';
    protected $primaryKey = 'agencyid';
    public $timeStamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
