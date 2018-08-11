<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => ":attribute debe ser aceptado.",
    "active_url"           => ":attribute no es una URL válida.",
    "after"                => ":attribute debe ser una fecha después de :date.",
    "alpha"                => ":attribute solo puede contener letras.",
    "alpha_dash"           => ":attribute solo puede contener letras, números y guiones.",
    "alpha_num"            => ":attribute solo puede contener letras y números.",
    "array"                => ":attribute debe ser un arreglo.",
    "before"               => ":attribute debe ser una fecha antes de :date.",
    "between"              => [
        "numeric" => ":attribute debe ser entre :min y :max.",
        "file"    => ":attribute debe ser entre :min y :max kilobytes.",
        "string"  => ":attribute debe ser entre :min y :max caracteres.",
        "array"   => ":attribute debe tener entre :min y :max artículos.",
    ],
    "boolean"              => "El campo :attribute debe ser cierto o falso.",
    "confirmed"            => "La confirmación de :attribute no es igual.",
    "date"                 => ":attribute no es una fecha válida.",
    "date_format"          => ":attribute no es igual al formato :format.",
    "different"            => ":attribute y :other deben ser diferentes.",
    "digits"               => ":attribute debe tener :digits dígitos.",
    "digits_between"       => ":attribute debe tener entre :min y :max dígitos.",
    "email"                => ":attribute debe ser una dirección de email válida.",
    "filled"               => "El campo :attribute es requerido.",
    "exists"               => "Tu selección de :attribute es inválida.",
    "image"                => ":attribute debe ser una imagen.",
    "in"                   => "Tu selección de :attribute es inválida.",
    "integer"              => ":attribute debe ser un número entero.",
    "ip"                   => ":attribute debe ser una dirección IP válida.",
    "max"                  => [
        "numeric" => ":attribute no puede ser más de :max.",
        "file"    => ":attribute no puede pesar más de :max kilobytes.",
        "string"  => ":attribute no puede tener más de :max characters.",
        "array"   => ":attribute no puede tener más de :max artículos.",
    ],
    "mimes"                => ":attribute debe ser un archivo de tipo: :values.",
    "min"                  => [
        "numeric" => ":attribute debe ser al menos :min.",
        "file"    => ":attribute debe pesar al menos :min kilobytes.",
        "string"  => ":attribute debe tener al menos :min caracteres.",
        "array"   => ":attribute debe incluir al menos :min artículos.",
    ],
    "not_in"               => "Tu selección de :attribute es inválida.",
    "numeric"              => ":attribute debe ser un número.",
    "regex"                => "El formato de :attribute es inválido.",
    "required"             => "El campo :attribute es requerido.",
    "required_if"          => "El campo :attribute es requerido cuando :other sea :value.",
    "required_unless"      => "El campo :attribute es requerido a menos que :other esté en :values.",
    "required_with"        => "El campo :attribute es requerido cuando :values esté presente.",
    "required_with_all"    => "El campo :attribute es requerido cuando :values esté presente.",
    "required_without"     => "El campo :attribute es requerido cuando :values no esté presente.",
    "required_without_all" => "El campo :attribute es requerido cuando ninguno de :values estén presentes.",
    "same"                 => ":attribute y :other deben ser iguales.",
    "size"                 => [
        "numeric" => ":attribute debe ser :size.",
        "file"    => ":attribute debe pesar :size kilobytes.",
        "string"  => ":attribute debe tener :size caracteres.",
        "array"   => ":attribute debe contener :size artículos.",
    ],
    "timezone"             => ":attribute debe ser una zona válida.",
    "unique"               => ":attribute ya ha sido tomado.",
    "url"                  => "El formato :attribute es inválido.",
    "entry_slug_exists"    => "Ya existe ese slug.",
    "page_uri_exists"      => "Ya existe ese slug.",
    "unique_asset_filename" => "Ya existe un medio con este nombre de archivo.",

    // Extended validation rules
    "ext" => ":attribute debe ser un archivo de tipo: :extensions",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'fields' => [
            'username' => [
                'not_in' => 'El nombre de usuario elegido ya está tomado.',
            ],
            'email' => [
                'not_in' => 'Esta dirección de email ya está tomada.',
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
