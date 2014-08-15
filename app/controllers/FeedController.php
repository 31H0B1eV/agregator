<?php

use Agregator\Helpers\XmlToJson;

class FeedController extends \BaseController {

    const UNIAN = 'http://rss.unian.net/site/news_rus.rss';
    const ICORPUS = 'http://icorpus.ru/feed/';
    const RUSVESNA = 'http://rusvesna.su/rss.xml';
    const CENSOR = 'http://censor.net.ua/includes/resonance_full_ru.xml';

	/**
	 * Display a listing of the resource.
	 * GET /feed
	 *
	 * @return Response
	 */
	public function index()
	{
        $data = new XmlToJson;

        list($json_unian_data, $json_icorpus_data, $json_rusvesna_data, $json_censor_data) = $this->parser($data);

        return $this->createArrayFromJsonObject($json_unian_data,
                                                $json_icorpus_data,
                                                $json_rusvesna_data,
                                                $json_censor_data);
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
        $json_icorpus_data = $data->parseXML(self::ICORPUS);
        $json_rusvesna_data = $data->parseXML(self::RUSVESNA);
        $json_censor_data = $data->parseXML(self::CENSOR);
        return array($json_unian_data, $json_icorpus_data, $json_rusvesna_data, $json_censor_data);
    }

    /**
     * @param $unian
     * @param $icorpus
     * @param $rusvesna
     * @param $censor
     * @return array
     */
    public function createArrayFromJsonObject($unian, $icorpus, $rusvesna, $censor)
    {
        /* this magic with encode/decode is necessary for receiving correct merge json object */
        return array_merge_recursive(json_decode(json_encode($unian, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($icorpus, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($rusvesna, JSON_UNESCAPED_UNICODE), true),
                                    json_decode(json_encode($censor, JSON_UNESCAPED_UNICODE), true));
    }
}