<?php

namespace InformaticaMobius\Tests\Support;

use InformaticaMobius\LaravelCustomFields\Traits\HasCustomFieldResponses;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasCustomFieldResponses;
}
