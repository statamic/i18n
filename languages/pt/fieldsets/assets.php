<?php

return [

    'image_manipulation_route' => 'Caminho de arquivos de imagem',
    'image_manipulation_route_instruct' => 'O URL onde seus arquivos de imagem redimensionáveis serão disponibilizados. Se estiver disponibilizando imagens em cache diretamente, essa deve ser a URL do cache.',

    'image_manipulation_secure' => 'Ficheiros de imagem protegidos',
    'image_manipulation_secure_instruct' => 'O redimensionamento de imagens deve ser protegido? Isso exigirá que você gere chaves usando suas tags.',

    'auto_crop' => 'Recorte automático de imagem',
    'auto_crop_instruct' => 'Devem as imagens ser recortadas automaticamente? Os seus pontos focais serão usados, se especificados.',

    'image_manipulation_driver' => 'Driver de Manipulação de Imagem',
    'image_manipulation_driver_instruct' => "Em alguns casos, o ImageMagick pode ser mais rápido, mas não está disponível em todos os servidores.",

    'image_manipulation_cached' => 'Disponibilizar imagens em cache diretamente',
    'image_manipulation_cached_instruct' => 'Devem as imagens ser geradas antes de serem solicitadas? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Leia mais</a>.',

    'image_manipulation_cached_path' => 'Caminho das imagens em cache',
    'image_manipulation_cached_path_instruct' => 'Ao disponiblizar imagens em cache diretamente, este é o local onde elas serão armazenadas. Este deve ser um local publicamente acessível.',

    'image_manipulation_presets' => 'Predefinições de manipulação de imagem',
    'image_manipulation_presets_instruct' => 'Especifique quaisquer <a href="http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets" target="_blank">predefinições Glide</a> (como YAML) que deseja ser referenciado nos modelos. Estes serão gerados automaticamente quando os arquivos são enviados.',

    'thumbnail_max_width' => 'Largura máxima de miniaturas (pixels)',
    'thumbnail_max_width_instruct' => 'Imagens mais largas que isso não terão miniaturas geradas.',

    'thumbnail_max_height' => 'Altura máxima de miniaturas (pixels)',
    'thumbnail_max_height_instruct' => 'Imagens mais altas que isso não terão miniaturas geradas.',


];
