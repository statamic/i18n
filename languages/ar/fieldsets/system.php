<?php

return [

    'license_key' => 'مفتاح الترخيص',
    'license_key_instruct' => 'أدخل مفتاح المجال المقابل من حسابك [Statamic Account] (https: /account.statamic.com/licenses).',

    'locales' => 'لغات',
    'locales_instruct' => 'المواقع التي سيتم الوصول إليها من موقعك.',

    'timezone' => 'وحدة زمنية',
    'timezone_instruct' => 'إن [timezone] (http://php.net/manual/en/timezones.php) تريد أن يعمل موقعك تحت.',

    'date_format' => 'صيغة التاريخ',
    'date_format_instruct' => 'سلسلة تنسيق تاريخ PHP يتم استخدامها عند إخراج متغيرات التاريخ غير المنسق.',

    'default_extension' => 'الملحق الافتراضي',
    'default_extension_instruct' => 'ملحق الملف لملفات المحتوى الخاصة بك.',

    'filesystems' => 'نظام الملفات',
    'filesystems_instruct' => 'تحديد كيف وأين سيتم الوصول إلى الملفات المختلفة الخاصة بك.',

    'app_key' => 'مفتاح التطبيق',
    'app_key_instruct' => 'يتم استخدام هذا المفتاح لتأمين التطبيق الخاص بك. يجب أن تكون سلسلة قوية تتكون من 32 حرفًا.',

    'redactor' => 'إعدادات Redactor',
    'redactor_instruct' => 'تمثيل YAML لـ [Redactor settings
                            objects](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            Each item will be available to select when creating a Redactor field.',

    'protect' => 'حماية على مستوى النظام',
    'protect_instruct' => 'سيؤدي إدخال نظام حماية هنا إلى تطبيقه على الواجهة الأمامية للموقع بالكامل.',
    
    'csrf_exclude' => 'CSRF عناوين URL المستبعدة',
    'csrf_exclude_instruct' => 'قائمة عناوين URL لاستبعادها من حماية CSRF',

    'php_max_memory_limit' => 'PHP الحد الأقصى للذاكرة',
    'php_max_memory_limit_instruct' => "سيحاول الحد الأقصى من الذاكرة Statamic استخدامها عند تنفيذ عمليات مكثفة للذاكرة مثل معالجة الصور. \ n اترك الحقل فارغًا لاستخدام أكبر قدر ممكن من الذاكرة. يمكنك تحديد وحدات البايت أو [قيم اختصار PHP التي تم التعرف عليها] (http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes).",

];
