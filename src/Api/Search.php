<?php

namespace Elsayed85\FaselHd\Api;

use Elsayed85\FaselHd\FaselHd;

class Search
{
    public FaselHd $api;

    public function __construct()
    {
        $this->api = new FaselHd();
    }

    public function search($query, $page = 1, $pageSize = 15)
    {
        return $this->api->post('Content/ContentSearch', [
            'data' => [
                'pageNumber' => $page,
                'data' => [
                    'searchText' => $query
                ],
                'pageSize' => $pageSize
            ]
        ]);
    }
}
