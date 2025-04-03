<?php

namespace ImmobiliareLabs\BrazeSDK\Object\Catalog;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Object\BaseObject;

class CreateCatalogItem extends BaseObject
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $fields = null;

    public function validate(bool $strict): void
    {
        if (null === $this->name) {
            throw new ValidationException('The "name" field is required');
        }

        if (null === $this->description) {
            throw new ValidationException('The "description" field is required');
        }

        if (null === $this->fields) {
            throw new ValidationException('The "fields" field is required');
        }
    }
}
