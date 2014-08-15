<?php

use Agregator\Helpers\XmlToJson;

class FeedController extends \BaseController {

    const UNIAN = 'http://rss.unian.net/site/news_rus.rss';
    const LIFENEWS = 'http://lifenews.ru/xml/feed.xml';
    const RUSVESNA = 'http://rusvesna.su/rss.xml';
    const CENSOR = 'http://censor.net.ua/includes/resonance_full_ru.xml';
    const LENTARU = 'http://lenta.ru/rss';
    const FLICKR = 'http://www.flourish.org/news/flickr-daily-interesting-one.xml';

	/**
	 * Display a listing of the resource.
	 * GET /feed
	 *
	 * @return Response
	 */
	public function index()
	{
        $data = new XmlToJson;

        list($json_lenta_data, $json_unian_data, $json_lifenews_data, $json_rusvesna_data, $json_censor_data) = $this->parser($data);

        return $this->createArrayFromJsonObject($json_unian_data,
                                                $json_lifenews_data,
                                                $json_rusvesna_data,
                                                $json_censor_data,
                                                $json_lenta_data);
	}

    public function getImageFeed()
    {
        $data = new XmlToJson;

        $feed = $data->parseXML(self::FLICKR);

        return json_decode(json_encode($feed, JSON_UNESCAPED_UNICODE), true);
    }

    public function show()
    {
        return View::make('pages.feed');
    }

    /**
     * @param $data
     * @return array
     */
    public function parser($data)
    {
        $json_unian_data = $data->parseXML(self::UNIAN);
        $json_lenta_data = $data->parseXML(self::LENTARU);
        $json_lifenews_data = $data->parseXML(self::LIFENEWS);
        $json_rusvesna_data = $data->parseXML(self::RUSVESNA);
        $json_censor_data = $data->parseXML(self::CENSOR);
        return array($json_unian_data, $json_lenta_data, $json_lifenews_data, $json_rusvesna_data, $json_censor_data);
    }

    /**
     * @param $unian
     * @param $lifenews
     * @param $lenta
     * @param $rusvesna
     * @param $censor
     * @return array
     */
    public function createArrayFromJsonObject($unian, $lifenews, $lenta, $rusvesna, $censor)
    {
        /* this magic with encode/decode is necessary for receiving correct merge json object */
        return array_merge_recursive(json_decode(json_encode($unian, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($lifenews, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($lenta, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($rusvesna, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($censor, JSON_UNESCAPED_UNICODE), true));
    }
}