<?php

namespace InformaticaMobius\Tests\Support;

use InformaticaMobius\LaravelCustomFields\Traits\HasCustomFields;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasCustomFields;
}
