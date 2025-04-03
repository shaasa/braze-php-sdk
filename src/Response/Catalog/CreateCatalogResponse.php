<?php

namespace ImmobiliareLabs\BrazeSDK\Response\Catalog;

use ImmobiliareLabs\BrazeSDK\Object\Catalog\CreateCatalogItem;
use ImmobiliareLabs\BrazeSDK\Response\BaseResponse;

class CreateCatalogResponse extends BaseResponse
{
    /**
     * @var CreateCatalogItem []|null
     */
    public ?array $catalogItem = null;
}
