<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Catalog;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class DeleteRequest extends BaseRequest
{
    public ?string $catalog_name = null;

    public function validate(bool $strict): void
    {
        if (null === $this->catalog_name) {
            throw new ValidationException('The "catalog_name" field is required');
        }
    }
}
