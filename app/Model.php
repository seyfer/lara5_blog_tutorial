<?php
declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: seyfer
 * Date: 2/13/17
 */

namespace app;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guarded = [];
}