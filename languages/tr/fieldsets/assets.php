<?php 

return [
    'image_manipulation_route' => 'Resim varlıkları rotası',
    'image_manipulation_route_instruct' => 'Yeniden boyutlandırılabilir resim varlıklarınızın sunulacağı URL. Önbelleğe alınmış görüntüleri doğrudan sunuyorsanız, bu, önbelleğe alınmış yolun URL`si olmalıdır.',

    'image_manipulation_secure' => 'Güvenli resim varlıkları',
    'image_manipulation_secure_instruct' => 'Görüntü yeniden boyutlandırması güvence altına alınmalı mı? Bu, etiketlerinizi kullanarak anahtarlar oluşturmanızı gerektirir.',
    
    'auto_crop' => 'Otomatik görüntü kırpma',
    'auto_crop_instruct' => 'Resimler otomatik olarak kırpılmalı mı? Belirtildiği takdirde odak noktaları kullanılacaktır.',
    
    'image_manipulation_driver' => 'Görüntü Manipülasyon Sürücüsü',
    'image_manipulation_driver_instruct' => 'Bazı durumlarda ImageMagick daha hızlı olabilir, ancak tüm sunucularda mevcut değildir.',
    
    'image_manipulation_cached' => 'Önbelleğe alınmış görüntüleri doğrudan servis edin',
    'image_manipulation_cached_instruct' => 'Görüntüler talep edilmeden önce oluşturulmalı mı? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Daha fazlasını oku</a> .',
    
    'image_manipulation_cached_path' => 'Önbelleğe alınmış görüntü yolu',
    'image_manipulation_cached_path_instruct' => 'Önbelleğe alınmış görüntüleri doğrudan sunarken, depolanacakları yer burasıdır. Burası halka açık bir yol olmalı.',
    
    'image_manipulation_presets' => 'Görüntü Manipülasyon Hazır Ayarları',
    'image_manipulation_presets_instruct' => 'Şablonlar içinde referans almak istediğiniz herhangi bir <a href="http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets" target="_blank">Glide</a> ayarını (YAML olarak) belirtin. Bunlar, varlıklar yüklendiğinde otomatik olarak oluşturulur.',
    
    'thumbnail_max_width' => 'Küçük resimler için maksimum görüntü genişliği',
    'thumbnail_max_width_instruct' => 'Bundan daha geniş resimler oluşturulan küçük resimlere sahip olmayacaktır.',
    
    'thumbnail_max_height' => 'Küçük resimler için maksimum görüntü yüksekliği',
    'thumbnail_max_height_instruct' => 'Bundan daha uzun resimler oluşturulan küçük resimlere sahip olmayacaktır.',
];