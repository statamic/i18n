<?php

return [

    'image_manipulation_route' => 'Image assets route',
    'image_manipulation_route_instruct' => 'The URL where your resizable image assets will be served.',

    'image_manipulation_secure' => 'Secure image assets',
    'image_manipulation_secure_instruct' => 'Should image resizing be secured? This will require that you generate keys using your tags.',

    'auto_crop' => 'Automatic image crop',
    'auto_crop_instruct' => 'Should images be automatically cropped? Their focal points will be used, if specified.',

    'image_manipulation_driver' => 'Image Manipulation Driver',
    'image_manipulation_driver_instruct' => "In some cases ImageMagick can be faster, but isn't available on all servers.",

];
