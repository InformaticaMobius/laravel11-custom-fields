<?php

namespace InformaticaMobius\LaravelCustomFields\FieldTypes;

class TextFieldType extends FieldType
{
    public function validationRules(array $attributes): array
    {
        return [
            $this->validationPrefix . $this->field->id => [
                $this->requiredRule($attributes['required']),
                'string',
                'max:255',
            ],
        ];
    }
}
