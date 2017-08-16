<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false,
            'description'  => 'For those who helped create the Genki Dama', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => 'cleaning company, cleaning services in miami, cleaning company in miami, Janitorial services in miami, housekeeping, 
                                housekeeping in miami, house cleaning services, commercial cleaning services, apartment cleaning services, housekeeping company',
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow,'
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'Ypxv7h-1XXWOshsVqqoiXBzcG64xLVTVVx-ZOKyRLAo',
            'bing'      => '2F5AE13C234B9E342003C8515BB4D206',
            'alexa'     => null,
            'pinterest' => 'fab8db1a10a74b6ca28ba3966d02bec5',
            'yandex'    => 'f2fe5aa16600e847',
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'CBR Cleaning Solutions Corp', // set false to total remove
            'description' => false, // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          'card'        => 'summary',
          'site'        => '@cbrcleaning',
        ],
    ],
];
