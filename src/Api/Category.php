<?php

namespace Elsayed85\FaselHd\Api;

use Elsayed85\FaselHd\FaselHd;

class Category
{
    public FaselHd $api;

    public function __construct()
    {
        $this->api = new FaselHd();
    }

    public function all()
    {
        return $this->api->get('Category/GetCategories');
    }

    public function subCategories($id)
    {
        return $this->api->get("Category/GetHomeCategories", [
            "CategoryMainId" => $id
        ]);
    }

    public function get($category, $page = 1, $pageSize = 15)
    {
        return $this->api->post('Content/GetContents', [
            'data' => [
                'pageNumber' => $page,
                'data' => [
                    'subCategoryName' => $category
                ],
                'pageSize' => $pageSize
            ]
        ]);
    }
}
