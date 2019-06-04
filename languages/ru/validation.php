<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Поле following language lines contain Поле default error messages used by
    | Поле validator class. Some of Полеse rules have multiple versions such
    | as Поле size rules. Feel free to tweak each of Полеse messages here.
    |
    */

    "accepted"             => "Поле :attribute должен быть принят.",
    "active_url"           => "Поле :attribute содержит неправильный URL.",
    "after"                => "Поле :attribute должен быть после даты :date.",
    "alpha"                => "Поле :attribute должно содержать только символы.",
    "alpha_dash"           => "Поле :attribute должно содержать только символы, числа и тире.",
    "alpha_num"            => "Поле :attribute должно содержать только символы и числа.",
    "array"                => "Поле :attribute должен быть массивом.",
    "before"               => "Поле :attribute должен быть до даты :date.",
    "between"              => [
        "numeric" => "Поле :attribute должнен содержать от :min до :max.",
        "file"    => "Размер поля :attribute должен быть между :min и :max килоБайтом.",
        "string"  => "Поле :attribute должнен содержать от :min до :max символов.",
        "array"   => "Поле :attribute должен содержать от :min до :max пунктов.",
    ],
    "boolean"              => "Поле :attribute должно содержать булевые значения (true, false).",
    "confirmed"            => "Поле :attribute не подходит подтверждению.",
    "date"                 => "Поле :attribute содержить неправильную дату.",
    "date_format"          => "Поле :attribute не соответствует формату :format.",
    "different"            => "Поле :attribute и :other должны быть разные.",
    "digits"               => "Поле :attribute должен содержать :digits цифр.",
    "digits_between"       => "Поле :attribute должно содержать от :min до :max цифр.",
    "email"                => "Поле :attribute должно содержать правильную эл. почту.",
    "filled"               => "Поле :attribute обязательно для заполнения.",
    "exists"               => "Выбранное поле :attribute неправильное.",
    "image"                => "Поле :attribute должнен быть файлом.",
    "in"                   => "Выбранное поле :attribute неправильная.",
    "integer"              => "Поле :attribute должен быть целым числом.",
    "ip"                   => "Поле :attribute должен содержать правильный IP адрес.",
    "max"                  => [
        "numeric" => "Поле :attribute может быть не больше :max.",
        "file"    => "Поле :attribute может быть не больше :max килоБайтов.",
        "string"  => "Поле :attribute может быть не больше :max символов.",
        "array"   => "Поле :attribute может быть не больше :max пунктов.",
    ],
    "mimes"                => "Поле :attribute должен быть файлом type: :values.",
    "min"                  => [
        "numeric" => "Поле :attribute должен быть не менее :min.",
        "file"    => "Поле :attribute должен быть не менее :min килоБайтов.",
        "string"  => "Поле :attribute должен быть не менее :min символов.",
        "array"   => "Поле :attribute должен быть не менее :min пунктов.",
    ],
    "not_in"               => "Выбранное поле :attribute неправильное.",
    "numeric"              => "Поле :attribute должен быть цифрой.",
    "regex"                => "Поле :attribute имеет неправильный формат.",
    "required"             => "Поле :attribute обязательно к заполнению.",
    "required_if"          => "Поле :attribute обязательно когда :other равен :value.",
    "required_unless"      => "Поле :attribute обязательно если :other не равен :value.",
    "required_with"        => "Поле :attribute обязательно когда :values присутствует.",
    "required_with_all"    => "Поле :attribute обязательно когда :values присутствует всюду.",
    "required_without"     => "Поле :attribute обязательно когда :values равен нечему.",
    "required_without_all" => "Поле :attribute требуется, если ни один из :values не присутствует.",
    "same"                 => "Поле :attribute и :other должны совпадать.",
    "size"                 => [
        "numeric" => "Поле :attribute должен быть :size.",
        "file"    => "Поле :attribute должен содержать :size килоБайтов.",
        "string"  => "Поле :attribute должен содержать :size символов.",
        "array"   => "Поле :attribute должен содержать :size пунктов.",
    ],
    "timezone"             => "Поле :attribute должен содержать правильный часовой пояс.",
    "unique"               => "Поле :attribute уже используется.",
    "url"                  => "Поле :attribute имеет неправильный формат.",
    "entry_slug_exists"    => "Данный ЧПУ уже используется.",
    "page_uri_exists"      => "Данный ЧПУ уже используется.",
    "unique_asset_filename" => "Файл с таким именем уже существует",

    // Extended validation rules
    "ext" => "Поле :attribute должен быть файлом type: :extensions",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using Поле
    | convention "attribute.rule" to name Поле lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'fields' => [
            'username' => [
                'not_in' => 'Выбранное имя пользователя принято',
            ],
            'email' => [
                'not_in' => 'Выбранная эл. почта принята',
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Поле following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
