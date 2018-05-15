<?php

return [

    'image_manipulation_route' => 'طريق الأصول الصورة',
    'image_manipulation_route_instruct' => 'عنوان URL الذي سيتم عرض أصول الصور القابلة لتغيير حجمه. إذا كان يتم عرض الصور المخزنة مؤقتًا مباشرةً ، فيجب أن يكون هذا عنوان URL للمسار المخزن مؤقتًا.',

    'image_manipulation_secure' => 'أصول الصورة الآمنة',
    'image_manipulation_secure_instruct' => 'هل يجب تأمين تغيير حجم الصورة؟ سيتطلب ذلك إنشاء مفاتيح باستخدام علاماتك.',

    'auto_crop' => 'التلقائي صورة المحاصيل',
    'auto_crop_instruct' => 'هل يجب اقتصاص الصور تلقائيًا؟ سيتم استخدام نقاط الاتصال الخاصة بهم ، إذا تم تحديدها.',

    'image_manipulation_driver' => 'سائق التلاعب صورة',
    'image_manipulation_driver_instruct' => "في بعض الحالات ، يمكن أن يكون برنامج ImageMagick أسرع ، ولكنه غير متوفر على جميع الخوادم.",

    'image_manipulation_cached' => 'عرض الصور المخزنة مؤقتًا مباشرةً',
    'image_manipulation_cached_instruct' => 'هل يجب إنشاء الصور قبل طلبها؟ <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank"> قراءة المزيد </a>.',

    'image_manipulation_cached_path' => 'مسار الصور المخزنة مؤقتًا',
    'image_manipulation_cached_path_instruct' => 'عند عرض الصور المخزنة مؤقتًا مباشرةً ، هذا هو المكان الذي سيتم تخزينها فيه. يجب أن يكون هذا موقعًا يمكن الوصول إليه بشكل عام.',

    'image_manipulation_presets' => 'الصورة التلاعب presets',
    'image_manipulation_presets_instruct' => 'حدد أي [الإنزلاقات المسبقة الإنزلاقية] (http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets) (مثل YAML) التي تريد أن يتم الرجوع إليها داخل القوالب. سيتم إنشاء هذه تلقائيًا عند تحميل الأصول.',

    'thumbnail_max_width' => 'أقصى عرض للصور للصور المصغرة',
    'thumbnail_max_width_instruct' => 'لن يتم عرض صور مصغرة لهذه الصور على نطاق أوسع من ذلك.',

    'thumbnail_max_height' => 'أقصى ارتفاع للصورة للصور المصغرة',
    'thumbnail_max_height_instruct' => 'فالصور الأطول من ذلك لن تحتوي على صور مصغرة تم إنشاؤها.',


];
