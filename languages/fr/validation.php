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

    "accepted"             => ":attribute doit être accepté.",
    "active_url"           => ":attribute n’est pas une URL valide.",
    "after"                => ":attribute doit être une date postérieure au :date.",
    "alpha"                => ":attribute ne peut contenir que des lettres.",
    "alpha_dash"           => ":attribute ne peut contenir que des lettres, des chiffres et des tirets.",
    "alpha_num"            => ":attribute ne peut contenir que des lettres et des chiffres.",
    "array"                => ":attribute doit être une matrice.",
    "before"               => ":attribute doit être une date antérieure au :date.",
    "between"              => [
        "numeric" => ":attribute doit être entre :min et :max.",
        "file"    => ":attribute doit être entre :min et :max kiloctets.",
        "string"  => ":attribute doit faire entre :min et :max caractères.",
        "array"   => ":attribute doit avoir entre :min et :max articles.",
    ],
    "boolean"              => ":attribute doit être vrai ou faux.",
    "confirmed"            => "La confirmation de :attribute n’est pas identique.",
    "date"                 => ":attribute n’est pas une date valide.",
    "date_format"          => ":attribute ne correspond pas au format :format.",
    "different"            => ":attribute et :other doivent être différents.",
    "digits"               => ":attribute doit faire :digits décimales.",
    "digits_between"       => ":attribute doit faire entre :min et :max décimales.",
    "email"                => ":attribute doit être une adresse email valide.",
    "filled"               => ":attribute est obligatoire.",
    "exists"               => ":attribute sélectionné(e) est invalide.",
    "image"                => ":attribute doit être une image.",
    "in"                   => ":attribute sélectionné(e) est invalide.",
    "integer"              => ":attribute doit être un entier.",
    "ip"                   => ":attribute doit être une adresse IP valide.",
    "max"                  => [
        "numeric" => ":attribute ne peut pas être plus grand que :max.",
        "file"    => ":attribute ne peut pas être supérieur à :max kiloctets.",
        "string"  => ":attribute ne peut pas dépasser :max caractères.",
        "array"   => ":attribute ne peut pas avoir plus de :max articles.",
    ],
    "mimes"                => ":attribute doit être un fichier de type : :values.",
    "min"                  => [
        "numeric" => ":attribute doit faire au moins :min.",
        "file"    => ":attribute doit faire au moins :min kiloctets.",
        "string"  => ":attribute doit faire au moins :min caractères.",
        "array"   => ":attribute doit avoir au moins :min articles.",
    ],
    "not_in"               => ":attribute sélectionné(e) est invalide.",
    "numeric"              => ":attribute doit être un chiffre.",
    "regex"                => "Le format de :attribute est invalide.",
    "required"             => ":attribute est obligatoire.",
    "required_if"          => ":attribute est obligatoire quand :other est :value.",
    "required_with"        => ":attribute est obligatoire quand :values est présent(e).",
    "required_with_all"    => ":attribute est obligatoire quand :values est présent(e).",
    "required_without"     => ":attribute est obligatoire quand :values est absent(e).",
    "required_without_all" => ":attribute est obligatoire quand tous(tes) :values sont absent(e)s.",
    "same"                 => ":attribute et :other doivent correspondre.",
    "size"                 => [
        "numeric" => ":attribute doit faire :size.",
        "file"    => ":attribute doit faire :size kiloctets.",
        "string"  => ":attribute doit faire :size caractères.",
        "array"   => ":attribute doit contenir :size articles.",
    ],
    "timezone"             => ":attribute doit être une zone valide.",
    "unique"               => ":attribute a déjà été pris(e).",
    "url"                  => "le format de :attribute est invalide.",
    "entry_slug_exists"    => "L'identificateur existe déjà.",
    "page_uri_exists"      => "L'identificateur existe déjà.",
    "unique_asset_filename" => "Une ressource avec ce nom de fichier existe déjà.",

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
                'not_in' => 'L’identifiant sélectionné est déjà pris.',
            ],
            'email' => [
                'not_in' => 'L’email sélectionné est déjà pris.',
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
