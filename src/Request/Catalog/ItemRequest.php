<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Catalog;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class ItemRequest extends BaseRequest
{
    public ?string $catalog_name = null;

    public ?array $item_id = null;

    public function validate(bool $strict): void
    {
        if (null === $this->item_id) {
            throw new ValidationException('The "item_id" field is required');
        }
    }
}
