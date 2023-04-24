<?php

namespace Elsayed85\FaselHd\Api;

use Elsayed85\FaselHd\FaselHd;

class Movie
{
    public FaselHd $api;

    public function __construct()
    {
        $this->api = new FaselHd();
    }

    public function all($page = 1, $pageSize = 15)
    {
        return $this->api->post('Content/GetContents', [
            'data' => [
                'pageNumber' => $page,
                'data' => [
                    'subCategoryName' => "movies"
                ],
                'pageSize' => $pageSize
            ]
        ]);
    }

    public function get($id)
    {
        return $this->api->get("Content/GetContent", [
            "ContentId" => $id
        ]);
    }

    public function recommended($id)
    {
        return $this->api->get("Content/GetRecommendedContent", [
            "ContentId" => $id
        ]);
    }

    public function watch($vid)
    {
        return $this->api->get("Video/Stream", [
            "video_id" => $vid
        ]);
    }


    public function download($vid)
    {
        return $this->api->get("Video/Download", [
            "video_id" => $vid
        ]);
    }

    public function comments($id)
    {
        return $this->api->post("Content/GetComments", [
            "ContentId" => $id
        ]);
    }
}
