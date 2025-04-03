<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Catalog;

use ImmobiliareLabs\BrazeSDK\Object\Catalog\CreateCatalogItem as CatalogListItem;
use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class CreateCatalogRequest extends BaseRequest
{

    public ?array $catalogs = null;

    public function validate(bool $strict): void
    {
        if (null === $this->catalogs) {
            throw new ValidationException('The "catalog_array_object" field is required');
        }
    }
}
