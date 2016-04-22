<?php

namespace Acme\Twitter;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

use GuzzleHttp\Subscriber\Oauth\Oauth1;

use GuzzleHttp\HandlerStack;

use Illuminate\Support\Facades\Config;



class TwitterServiceProvider extends ServiceProvider{

    /**
     * Resgister the service provider
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('twitter', function ()
        {


            $middleware = new Oauth1([
                'consumer_key' => Config::get('twitter.consumer_key'),
                'consumer_secret' => Config::get('twitter.consumer_secret'),
                'token' => Config::get('twitter.token'),
                'token_secret' => Config::get('twitter.token_secret'),

            ]);

            $stack = HandlerStack::create();
            $stack->push($middleware);

            $client = new Client([
                'base_uri' => 'https://api.twitter.com/',
                'handler' => $stack]);


            return new TwitterAPI($client);

        });





    }


}