<?php

namespace App\Providers;

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Illuminate\Support\ServiceProvider;



class LaravelGoogleAdsProvider extends ServiceProvider
{
       /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind some classes related to the Google Ads API client library for
        // PHP.
        $this->app->bind(
            'Google\AdsApi\AdManager\AdManagerSession',
            function () {
                return new AdManagerSession();
            }
        );
        $this->app->bind(
            'Google\Auth\FetchAuthTokenInterface',
            function () {
                // Generate a refreshable OAuth2 credential for authentication
                // from the config file.
                return (new OAuth2TokenBuilder())->fromFile(
                    config('adsapi_php')
                )->build();
            }
        );
        $this->app->bind(
            'Google\AdsApi\AdManager\AdManagerSessionBuilder',
            function () {
                return new AdManagerSessionBuilder();
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}