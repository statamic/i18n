<?php

return [

    'image_manipulation_route' => 'Image assets route',
    'image_manipulation_route_instruct' => 'The URL where your resizable image assets will be served. If serving cached images directly, this should be the URL of the cached path.',

    'image_manipulation_secure' => 'Secure image assets',
    'image_manipulation_secure_instruct' => 'Should image resizing be secured? This will require that you generate keys using your tags.',

    'auto_crop' => 'Automatic image crop',
    'auto_crop_instruct' => 'Should images be automatically cropped? Their focal points will be used, if specified.',

    'image_manipulation_driver' => 'Image Manipulation Driver',
    'image_manipulation_driver_instruct' => "In some cases ImageMagick can be faster, but isn't available on all servers.",

    'image_manipulation_cached' => 'Serve cached images directly',
    'image_manipulation_cached_instruct' => 'Should images be generated before they are requested? [Read more](https://docs.statamic.com/reference/tags/glide#serving-cached-images)',

    'image_manipulation_cached_path' => 'Cached images path',
    'image_manipulation_cached_path_instruct' => 'When serving cached images directly, this is where they will be stored. This must be a publicly accessible location.',
];
