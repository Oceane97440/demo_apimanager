<?php

namespace App\Http\Controllers;
use App\Models\CampaignAdManager;


class CampaignsAdManagerController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function report()
    {
       //return 'Hello World';

       foreach (CampaignAdManager::all() as $flight) {
        echo $flight->campaign_admanager_id;
    }

    }
}