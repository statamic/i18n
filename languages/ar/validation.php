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

    "accepted"             => "يجب قبول ال:attribute.",
    "active_url"           => "ال:attribute ليس عنوان URL صالحًا.",
    "after"                => "يجب أن يكون fobar تاريخ بعد :date.",
    "alpha"                => "ال:attribute قد تحتوي فقط على أحرف.",
    "alpha_dash"           => "قد يحتوي ال:attribute فقط على أحرف وأرقام وشرطات.",
    "alpha_num"            => "قد ال:attribute تحتوي فقط على أحرف وأرقام.",
    "array"                => "يجب أن يكون ال:attribute صفيف.",
    "before"               => "يجب أن يكون fobar قبل تاريخ :date.",
    "between"              => [
        "numeric" => "يجب أن يكون ال:attribute بين :min و :max.",
        "file"    => "يجب أن يكون ال:attribute بين :min و :max كيلوبايت.",
        "string"  => "يجب أن يكون ال:attribute بين :min و :max characters.",
        "array"   => "يجب أن يكون ال:attribute بين :min و :max items.",
    ],
    "boolean"              => "يجب أن يكون ال:attribute صحيحًا أو خطأ.",
    "confirmed"            => "تأكيد ال:attribute لا يتطابق.",
    "date"                 => "ال:attribute ليس تاريخًا صالحًا.",
    "date_format"          => "ال:attribute لا يتطابق مع التنسيق :format.",
    "different"            => "ال:attribute و :other يجب أن تكون مختلفة.",
    "digits"               => "يجب أن يكون ال:attribute :digits أرقام.",
    "digits_between"       => "يجب أن يكون ال:attribute بين :min و :max numbers.",
    "email"                => "يجب أن يكون ال:attribute عنوان بريد إلكتروني صالح.",
    "filled"               => "مطلوب ال:attribute.",
    "exists"               => "السمة المحددة: غير صالحة.",
    "image"                => "يجب أن يكون ال:attribute صورة.",
    "in"                   => "السمة المحددة: غير صالحة.",
    "integer"              => "يجب أن يكون ال:attribute عددًا صحيحًا.",
    "ip"                   => "يجب أن يكون ال:attribute عنوان IP صالحًا.",
    "max"                  => [
        "numeric" => "ال:attribute قد لا يكون أكبر من :max",
        "file"    => "قد لا يكون ال:attribute أكبر من :max كيلوبايت.",
        "string"  => "قد لا يكون ال:attribute أكبر من :max محرفاً.",
        "array"   => "قد لا تحتوي ال:attribute على أكثر من :max من العناصر.",
    ],
    "mimes"                => "ال:attribute يجب أن يكون ملف من النوع: :values.",
    "min"                  => [
        "numeric" => "يجب أن يكون ال:attribute: min دقيقة.",
        "file"    => "يجب أن يكون ال:attribute: min  أقل من كيلوبايت.",
        "string"  => "يجب أن يكون ال:attribute: min أقل عدد من الأحرف.",
        "array"   => "يجب أن يكون ال:attribute: min عناصر دقيقة.",
    ],
    "not_in"               => "السمة المحددة: غير صالحة.",
    "numeric"              => "يجب أن يكون ال:attribute رقمًا.",
    "regex"                => "تنسيق ال:attribute غير صالح.",
    "required"             => "مطلوب ال:attribute.",
    "required_if"          => "مطلوب ال:attribute عندما:other هو :value.",
    "required_unless"      => "حقل ال:attribute مطلوب ما لم :other في :values.",
    "required_with"        => "مطلوب ال:attribute عندما توقد :values.",
    "required_with_all"    => "مطلوب ال:attribute عندما:values موجودة.",
    "required_without"     => "مطلوب ال:attribute عندما:values غير موجودة.",
    "required_without_all" => "مطلوب ال:attribute عندما لا تكون أي من:values موجودة.",
    "same"                 => "ال:attribute و :other يجب أن يتطابقا.",
    "size"                 => [
        "numeric" => "يجب أن يكون ال:attribute: size.",
        "file"    => "يجب أن يكون ال:attribute :size الكيلوبايت.",
        "string"  => "يجب أن يكون ال:attribute :size الأحرف.",
        "array"   => "يجب أن يحتوي ال:attribute على: عناصر الحجم.",
    ],
    "timezone"             => "يجب أن يكون ال:attribute منطقة صالحة.",
    "unique"               => "ال:attribute قد اتخذت بالفعل.",
    "url"                  => "تنسيق ال:attribute غير صالح.",
    "entry_slug_exists"    => "سبيكة بالفعل موجود.",
    "page_uri_exists"      => "سبيكة بالفعل موجود.",
    "unique_asset_filename" => "يوجد أصل بهذا الاسم.",

    // Extended validation rules
    "ext" => "ال:attribute يجب أن يكون ملف من نوع: :extensions",

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
                'not_in' => 'The selected username is taken.',
            ],
            'email' => [
                'not_in' => 'The selected email is taken.',
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
