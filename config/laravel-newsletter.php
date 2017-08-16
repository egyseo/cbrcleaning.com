<?php

return [

        /*
         * The api key of a MailChimp account. You can find yours here:
         * https://us10.admin.mailchimp.com/account/api-key-popup/
         */
        'apiKey' => env('MAILCHIMP_APIKEY'),

        /*
         * When not specifying a listname in the various methods, use the list with this name
         */
        'defaultListName' => env('MAILCHIMP_LIST_NAME'),

        /*
         * Here you can define properties of the lists you want to
         * send campaigns.
         */
        'lists' => [           
            'subscribers' => [                
                'id' => env('914'),
            ],
        ],

        /*
         * If you're having trouble with https connections, set this to false.
         */
        'ssl' => true,
];
