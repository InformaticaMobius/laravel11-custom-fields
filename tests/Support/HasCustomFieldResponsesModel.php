<?php

namespace InformaticaMobius\Tests\Support;

use InformaticaMobius\LaravelCustomFields\Traits\HasCustomFieldResponses;
use Illuminate\Database\Eloquent\Model;

class HasCustomFieldResponsesModel extends Model
{
    use HasCustomFieldResponses;
}
