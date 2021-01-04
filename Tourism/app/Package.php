<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'tours';
    protected $primaryKey = 'agencyid';
    public $timeStamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
