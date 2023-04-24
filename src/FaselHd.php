<?php

namespace Elsayed85\FaselHd;

use Illuminate\Support\Facades\Http;

class FaselHd
{
    public $host;
    public $token;

    public function __construct()
    {
        $this->host = config('lara-faselhd.host');
        $this->token = config('lara-faselhd.token');
    }

    public function get($url, $params = [])
    {
        $url = $this->host . $url;
        return Http::withToken($this->token)->get($url, $params);
    }

    public function post($url, $params = [])
    {
        $url = $this->host . $url;
        return Http::withToken($this->token)->post($url, $params);
    }

    public function delete($url, $params = [])
    {
        $url = $this->host . $url;
        return Http::withToken($this->token)->delete($url, $params);
    }

    public static function movies()
    {
        return new Api\Movie();
    }

    public static function series()
    {
        return new Api\TV();
    }

    public static function categories()
    {
        return new Api\Category();
    }

    public static function search()
    {
        return new Api\Search();
    }
}
