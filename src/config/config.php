<?php
return array(

	'auth' => array(
		'local' => array(
			// OAuth2 Setting, you can get these keys in Google Developers Console
            'oauth2_client_id'      => '< YOUR CLIENT ID >',
            'oauth2_client_secret'  => '< YOUR CLIENT SECRET >',
            'oauth2_redirect_uri'   => 'http://localhost:8000/',   // Change it according to your needs
		),
		'prod' => array(
			// OAuth2 Setting, you can get these keys in Google Developers Console
            'oauth2_client_id'      => '< YOUR CLIENT ID >',
            'oauth2_client_secret'  => '< YOUR CLIENT SECRET >',
            'oauth2_redirect_uri'   => 'http://localhost:8000/',   // Change it according to your needs
		)
	
	),

    // Definition of service specific values like scopes, OAuth token URLs, etc
    'services' => array(

        'calendar' => array(
            'scope' => 'https://www.googleapis.com/auth/calendar'
        ),
		'https://www.googleapis.com/auth/userinfo.email'
        /*'books' => [
            'scope' => 'https://www.googleapis.com/auth/books'
        ]*/

    ),

    // Service file name prefix
    'service_class_prefix' => 'Google_Service_',

    // Custom settings
    'access_type' => 'offline',    
    'approval_prompt' => 'auto',

);
