<?php

return [
    'form-name' => env('CUSTOM_FIELDS_FORM_NAME', 'custom_fields'),

    'tables' => [
        'fields' => env('CUSTOM_FIELDS_TABLE', 'custom_fields'),
        'field-responses' => env('CUSTOM_FIELD_RESPONSES_TABLE', 'custom_field_responses'),
    ],

    'models' => [
        'custom-field' => \InformaticaMobius\LaravelCustomFields\Models\CustomField::class,
        'custom-field-response' => \InformaticaMobius\LaravelCustomFields\Models\CustomFieldResponse::class,
    ],

    /*
    | -------------------------------------------------------------------
    | Field Types
    | -------------------------------------------------------------------
    |
    | The list of all custom field types. You can register
    | your own custom field types here. Make sure to also
    | register the corresponding response type below.
    */
    'fields' => [
        'checkbox' => \InformaticaMobius\LaravelCustomFields\FieldTypes\CheckboxFieldType::class,
        'number' => \InformaticaMobius\LaravelCustomFields\FieldTypes\NumberFieldType::class,
        'radio' => \InformaticaMobius\LaravelCustomFields\FieldTypes\RadioFieldType::class,
        'select' => \InformaticaMobius\LaravelCustomFields\FieldTypes\SelectFieldType::class,
        'textarea' => \InformaticaMobius\LaravelCustomFields\FieldTypes\TextareaFieldType::class,
        'text' => \InformaticaMobius\LaravelCustomFields\FieldTypes\TextFieldType::class,
    ],

    /*
    | -------------------------------------------------------------------
    | Response Types
    | -------------------------------------------------------------------
    |
    | The list of all custom field response types. You can register
    | your own custom field responses here. Make sure to also
    | register the corresponding field type above.
    */
    'responses' => [
        'checkbox' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\CheckboxResponseType::class,
        'number' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\NumberResponseType::class,
        'radio' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\RadioResponseType::class,
        'select' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\SelectResponseType::class,
        'textarea' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\TextareaResponseType::class,
        'text' => \InformaticaMobius\LaravelCustomFields\ResponseTypes\TextResponseType::class,
    ],

    /*
    | -------------------------------------------------------------------
    | Value Fields
    | -------------------------------------------------------------------
    |
    | The list of all value columns that can hold a response value on the
    | custom_field_responses table.
    */
    'value-fields' => [
        'value_int',
        'value_str',
        'value_text',
        'value_json',
    ],

];
