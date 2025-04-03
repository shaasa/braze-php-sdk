<?php

namespace ImmobiliareLabs\BrazeSDK\Object\Catalog;

use ImmobiliareLabs\BrazeSDK\Object\BaseObject;

class CreatedCatalogItem extends BaseObject
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $fields = null;

    public ?int $num_items = null;

    public ?\DateTimeInterface $updated_at = null;

    /**
     * @throws \DateMalformedStringException
     */
    public function fillFromArray(array $params, bool $allowExtraProperties = false): void
    {
        if (isset($params['updated_at']) && is_string($params['updated_at'])) {
            $this->updated_at = new \DateTimeImmutable($params['updated_at']);
        }
    }
}
