<?php

return [
    'ADWORDS' => [
       // 'developerToken' => '',
        //'clientCustomerId' => '',

        /*
         * Optional. Set a friendly application name identifier.
         *
         * 'userAgent' => '',
         */

        /*
         * Optional additional AdWords API settings.
         * endpoint = "https://adwords.google.com/"
         *
         * 'isPartialFailure' => false,
         */

        /*
         * Optional setting for utility usage tracking in the user agent in requests.
         * Defaults to true.
         *
         * 'includeUtilitiesInUserAgent' => true,
         */
    ],

    'DFP' => [
        'networkCode' => '1026422',
        'applicationName' => 'api_manager',
    ],

    'ADWORDS_REPORTING' => [
        /*
         * Optional reporting settings.
         *
         * 'isSkipReportHeader' => false,
         * 'isSkipColumnHeader' => false,
         * 'isSkipReportSummary' => false,
         * 'isUseRawEnumValues' => false,
         */
    ],

    'OAUTH2' => [
        /*
         * Required OAuth2 credentials. Uncomment and fill in the values for the
         * appropriate flow based on your use case. See the README for guidance:
         * https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started
         */

        /*
         * For installed application or web application flow.
         * 'clientId' => '',
         * 'clientSecret' => '',
         * 'refreshToken' => '',
         */

        /*
         * For service account flow. */
          'jsonKeyFilePath' => "reporting-323210-8f947e582fbb.json",
          'scopes' => "https://www.googleapis.com/auth/dfp",
        
    ],

    'SOAP' => [
        /*
         * Optional SOAP settings. See SoapSettingsBuilder.php for more information.
         * 'compressionLevel' => <COMPRESSION_LEVEL>,
         * 'wsdlCache' => <WSDL_CACHE>,
         */
    ],

    'PROXY' => [
        /*
         * Optional proxy settings to be used by SOAP requests.
         * 'host' => '<HOST>',
         * 'port' => <PORT>,
         * 'user' => '<USER>',
         * 'password' => '<PASSWORD>',
         */
    ],

    'LOGGING' => [
        /*
         * Optional logging settings.
         * 'soapLogFilePath' => 'path/to/your/soap.log',
         * 'soapLogLevel' => 'INFO',
         * 'reportDownloaderLogFilePath' => 'path/to/your/report-downloader.log',
         * 'reportDownloaderLogLevel' => 'INFO',
         * 'batchJobsUtilLogFilePath' => 'path/to/your/bjutil.log',
         * 'batchJobsUtilLogLevel' => 'INFO',
         */
    ],

    'adsapi_php_path' => realpath(base_path('adsapi_php.ini'))

];