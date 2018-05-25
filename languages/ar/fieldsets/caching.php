<?php

return [

    'stache' => '"Stache"الـ ',
    'stache_instruct' => 'اسمنا الحميم للذاكرة المؤقتة الداخلية لـ Statamic.',

    'stache_always_update' => 'تحديث Stache على كل طلب؟',
    'stache_always_update_instruct' => 'سيؤدي التحديث على كل طلب إلى السماح بالكشف عن التغييرات التي تم إجراؤها مباشرةً على الملفات ، ولكنها تأتي مع نتيجة أداء. إذا كنت تستخدم لوحة التحكم لإدارة المحتوى ، فيمكنك تعطيل هذا لأنه سيتم تحديث Stache عند قيامك بالنشر.',

   'static_caching' => 'التخزين المؤقت للصفحة الثابتة',
   'static_caching_instruct' => 'يسمح التخزين المؤقت للصفحة الثابتة بصفحات الويب الخاصة بك بحفظها كملفات HTML مسطحة للحصول على مزايا سرعة مذهلة.',

   'static_caching_enabled' => 'مكن',

   'static_caching_length' => 'طول الكاش الافتراضي',
   'static_caching_length_instruct' => 'المدة التي يجب أن يتم فيها تخزين كل صفحة مؤقتًا في دقائق. ينطبق هذا فقط عند استخدام نوع "ذاكرة التخزين المؤقت".',

   'static_caching_type' => 'نوع التخزين المؤقت',
   'static_caching_type_instruct' => 'سيؤدي حفظ الملف إلى إنشاء ملفات html في `static` ، وستحتاج إلى إعداد htaccess. خلاف ذلك ، سيتم استخدام ذاكرة التخزين المؤقت القياسية.',

    'static_caching_file_path' => 'مسار الملفات الثابتة',
    'static_caching_file_path_instruct' => 'الموقع الذي ستتم فيه كتابة الملفات عند استخدام التخزين المؤقت المستند إلى الملف.',

    'static_caching_ignore_query_strings' => 'تجاهل سلاسل الاستعلام',
    'static_caching_ignore_query_strings_instruct' => 'عند التمكين ، سيتم التعامل مع الصفحة على أنها نفس عنوان URL بغض النظر عن أي معلمات سلسلة استعلام. لا يمكن تعطيله عند استخدام التخزين المؤقت الثابت المستند إلى الملف.',

    'static_caching_exclude' => 'عناوين URL مستبعدة',
    'static_caching_exclude_instruct' => 'قائمة بعناوين URL التي يجب استبعادها من التخزين المؤقت.',

    'static_caching_invalidation' => 'قواعد الإبطال',
    'static_caching_invalidation_instruct' => 'مجموعة من قواعد الإبطال.',


];
