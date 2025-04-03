<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Catalog;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class MultipleItemsRequest extends BaseRequest
{
    public ?string $catalog_name = null;

    public ?array $items = null;

    public function validate(bool $strict): void
    {
        if (null === $this->items) {
            throw new ValidationException('The "items" field is required');
        }
    }
}
