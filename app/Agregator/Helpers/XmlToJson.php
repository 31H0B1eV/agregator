<?php


namespace Agregator\Helpers;


use Codeception\Lib\Connector\Guzzle;
use GuzzleHttp\Client;

class XmlToJson {

    /**
     * use google api for xml in json converting
     *
     * @param $url
     * @return mixed
     */
    public function parseXML ($url) {

        $client = new Client;

        $response = $client->get("https://ajax.googleapis.com/ajax/services/feed/load?v=2.0&q="
                                . $url
                                . "&num=10");

        return $response->json();
    }
} 