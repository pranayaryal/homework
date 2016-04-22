<?php

namespace Acme\Twitter;

use GuzzleHttp;

use Illuminate\Support\Facades\Config;

use GuzzleHttp\Client;

class TwitterAPI{


    protected $client;
    
    public function __construct(Client $client)
    {
        
        $this->client = $client;

    }

    public function search($query)
    {
        $response = $this->client->get("1.1/search/tweets.json?q=" . urlencode($query), ['auth' => 'oauth']);


        $tweets = array_pluck(json_decode($response->getBody(), true)['statuses'], 'text');

        return $tweets;

    }
}