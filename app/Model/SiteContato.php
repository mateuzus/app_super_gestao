<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $all)
 */
class SiteContato extends Model
{
    //
    /**
     * @var mixed
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'reason_contact',
        'message'
    ];
}
