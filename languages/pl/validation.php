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

    "accepted"             => ":attribute musi być zaakceptowany.",
    "active_url"           => ":attribute nie jest poprawny adresem URL.",
    "after"                => ":attribute musi być datą po :date.",
    "alpha"                => ":attribute może zawierać tylko litery.",
    "alpha_dash"           => ":attribute może zawierac tylko litery, liczby i myślniki.",
    "alpha_num"            => ":attribute może zawierać tylko litery i liczby.",
    "array"                => ":attribute musi być tablicą.",
    "before"               => ":attribute musi być datą przed :date.",
    "between"              => [
        "numeric" => ":attribute musi zawierać się pomiędzy :min oraz :max.",
        "file"    => ":attribute musi zawierać się pomiędzy :min oraz :max kilobajtami.",
        "string"  => ":attribute musi zawierać się pomiędzy :min and :max znakami.",
        "array"   => ":attribute musi zawierać się pomiędzy :min and :max rzędami.",
    ],
    "boolean"              => ":attribute musi być prawdą albo fałszem.",
    "confirmed"            => "Potwierdzenie :attribute nie pasuje.",
    "date"                 => ":attribute nie jest prawidłowym formatem daty.",
    "date_format"          => ":attribute nie pasuje do formatu :format.",
    "different"            => ":attribute oraz :other muszą być różne.",
    "digits"               => ":attribute musi zawierać :digits liczb.",
    "digits_between"       => ":attribute musi zawierać się pomiędzy :min oraz :max liczbami.",
    "email"                => ":attribute musi być poprawnym adresem e-mail.",
    "filled"               => ":attribute jest wymagany.",
    "exists"               => "wybrany :attribute jest nieprawidłowy.",
    "image"                => ":attribute musi być obrazkiem.",
    "in"                   => "wybrany :attribute jest nieprawidłowy.",
    "integer"              => ":attribute musi być liczbą.",
    "ip"                   => ":attribute musi być poprawnym adresem IP.",
    "max"                  => [
        "numeric" => ":attribute nie może być większe niż :max.",
        "file"    => ":attribute nie może być większe niż :max kilobajty.",
        "string"  => ":attribute nie może być dłuższe niż :max znaki.",
        "array"   => ":attribute nie może zawierać więcej niż :max rzędów.",
    ],
    "mimes"                => ":attribute musi być typem pliku: :values.",
    "min"                  => [
        "numeric" => ":attribute musi być co najmniej :min.",
        "file"    => ":attribute musi mieć co najmniej :min kilobajtów.",
        "string"  => ":attribute musi mieć co najmniej :min znaków.",
        "array"   => ":attribute musi posiadać co najmniej :min rzędów.",
    ],
    "not_in"               => "wybrany :attribute jest nieprawidłowy.",
    "numeric"              => ":attribute musi być liczbą.",
    "regex"                => "format :attribute jest nieprawidłowy.",
    "required"             => ":attribute jest wymagany.",
    "required_if"          => ":attribute jest wymagany, gdy :other jest :value.",
    "required_unless"      => ":attribute jest wymagany, chyba że :other jest :values.",
    "required_with"        => ":attribute jest wymagany, gdy :values istnieje.",
    "required_with_all"    => ":attribute jest wymagany, gdy :values istnieją.",
    "required_without"     => ":attribute jest wymagany, gdy :values nie istnieje.",
    "required_without_all" => ":attribute jest wymagany, gdy żadne z wartości :values nie istnieją.",
    "same"                 => ":attribute oraz :other muszą pasować.",
    "size"                 => [
        "numeric" => ":attribute musi być :size.",
        "file"    => ":attribute musi mieć :size kilobajtów.",
        "string"  => ":attribute musi mieć :size znaków.",
        "array"   => ":attribute musi posiadać :size rzędów.",
    ],
    "timezone"             => ":attribute musi być prawidłowym formatem strefy czasowej.",
    "unique"               => ":attribute jest już zajęty.",
    "url"                  => "format :attribute jest nieprawidłowy.",
    "entry_slug_exists"    => "Slug już istenieje.",
    "page_uri_exists"      => "Slug już istenieje.",
    "unique_asset_filename" => "Plik z tą nazwą już istnieje.",

    // Extended validation rules
    "ext" => ":attribute musi mieć rozszerzenie: :extensions",

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
                'not_in' => 'Nazwa tego użytkownika już istenieje.',
            ],
            'email' => [
                'not_in' => 'Podany e-mail już istnieje.',
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
