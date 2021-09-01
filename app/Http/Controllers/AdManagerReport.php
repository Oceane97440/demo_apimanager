<?php


namespace Google\AdsApi\AdManager\v202108\NetworkService;


use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202108\ApiException;
use Google\AdsApi\AdManager\v202108\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

namespace App\Http\Controllers;
use App\Models\CampaignAdManager;
use App\Models\Campaign;




class AdManagerReport extends Controller
{

  

    public static function report(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) 
    {
     
   
        $networkService = $serviceFactory->createNetworkService($session);

        // Get the current network.
        $network = $networkService->getCurrentNetwork();

        printf(
            "Current network has network code '%s' and display name '%s'.%s",
            $network->getNetworkCode(),
            $network->getDisplayName(),
            PHP_EOL
        );
    
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::report(new ServiceFactory(), $session);
    }
}

AdManagerReport::main();


