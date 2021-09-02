<?php


namespace App\Http\Controllers;
use App\Models\CampaignAdManager;
use App\Models\Campaign;

class CampaignsController extends Controller
{
    /**
     * Fonction générate report API Google Ad Manager.
     *
     */
    public function report(
        //ServiceFactory $serviceFactory,
        //AdManagerSession $session
    )
    {

       $results = CampaignAdManager::all();

       var_dump($results);




  

    }
}