<?php


namespace App\Http\Controllers;
use Google\Auth\FetchAuthTokenInterface;


use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202108\ApiException;
use Google\AdsApi\AdManager\v202108\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\AdManager\AdManagerServices;

use App\Models\CampaignAdManager;
use App\Models\Campaign;




class AdManagerController extends Controller
{

  
    /**
     * Gets the current network.
     *
     * @param ServiceFactory $serviceFactory the factory class for creating a
     *     network service client
     * @param AdManagerSessionBuilder $session the session containing configurations
     *     for creating a network service client
     * @throws ApiException if the request for getting all networks fails
     */

    public static function report(
       ServiceFactory $serviceFactory,
       AdManagerServices $adManagerServices,
       AdManagerSessionBuilder $session
    ) 
    {
      var_dump($session);

  

    /*$networkService = $serviceFactory->createNetworkService($session);
      // Get the current network.
        $network = $networkService->getCurrentNetwork();

        printf(
            "Current network has network code '%s' and display name '%s'.%s",
            $network->getNetworkCode(),
            $network->getDisplayName(),
            PHP_EOL
        );*/

              // Generate a refreshable OAuth2 credential for authentication.
             /* $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build(config('config.adsapi_php_path'));

         
              // Construct an API session configured from a properties file and the
              // OAuth2 credentials above.
              $session = (new AdManagerSessionBuilder())->fromFile(config('config.adsapi_php_path'))
              ->withOAuth2Credential($oAuth2Credential)
              ->build();

              self::report(new ServiceFactory(), $session);*/

    }


}



