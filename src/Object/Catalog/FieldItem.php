<?php

namespace ImmobiliareLabs\BrazeSDK\Object\Catalog;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Object\BaseObject;

class FieldItem extends BaseObject
{
    public ?string $name = null;

    public ?string $type = null;

    public function validate(bool $strict): void
    {
        if (null === $this->name) {
            throw new ValidationException('The "name" field is required');
        }

        if (null === $this->type) {
            throw new ValidationException('The "type" field is required');
        }
    }
}
