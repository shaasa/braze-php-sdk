<?php

namespace ImmobiliareLabs\BrazeSDK\Endpoint;

use ImmobiliareLabs\BrazeSDK\Request\Catalog\MultipleItemsRequest;
use ImmobiliareLabs\BrazeSDK\Response\Catalog\CreateCatalogResponse;
use ImmobiliareLabs\BrazeSDK\Request\Catalog\CreateCatalogRequest;
use ImmobiliareLabs\BrazeSDK\Request\Catalog\DeleteRequest;
use ImmobiliareLabs\BrazeSDK\Response\Catalog\MultipleItemsResponse;
use ImmobiliareLabs\BrazeSDK\Response\Catalog\DeleteCatalogResponse;

class Catalog extends Endpoint
{
    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_management/synchronous/delete_catalog
     */
    public function deleteCatalog(DeleteRequest $request, bool $resolveResponse = true): DeleteCatalogResponse
    {
        $catalogName = $request->catalog_name;

        return $this->makeRequest('DELETE', sprintf('/catalogs/%s', $catalogName), $request,DeleteCatalogResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_management/synchronous/post_create_catalog/
     */
    public function createCatalog(CreateCatalogRequest $request, bool $resolveResponse = true): CreateCatalogResponse
    {
        return $this->makeRequest('POST', '/catalogs', $request, CreateCatalogResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_management/synchronous/get_list_catalogs
     */
    public function getListCatalog(CreateCatalogRequest $request, bool $resolveResponse = true): CreateCatalogResponse
    {
        return $this->makeRequest('GET', '/catalogs', $request, CreateCatalogResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_items/asynchronous/post_create_catalog_items_bulk
     */
    public function createMultipleItems(MultipleItemsRequest $request, bool $resolveResponse = true): MultipleItemsResponse
    {
        $catalogName = $request->catalog_name;
        $request->catalog_name = null;

        return $this->makeRequest('POST', sprintf('/catalogs/%s/items', $catalogName), $request, MultipleItemsResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_items/asynchronous/delete_catalog_items_bulk
     */
    public function deleteMultipleItems(MultipleItemsRequest $request, bool $resolveResponse = true): MultipleItemsResponse
    {
        $catalogName = $request->catalog_name;
        $request->catalog_name = null;

        return $this->makeRequest('DELETE', sprintf('/catalogs/%s/items', $catalogName), $request, MultipleItemsResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_items/asynchronous/patch_catalog_items_bulk
     */
    public function editMultipleItems(MultipleItemsRequest $request, bool $resolveResponse = true): MultipleItemsResponse
    {
        $catalogName = $request->catalog_name;
        $request->catalog_name = null;

        return $this->makeRequest('PATCH', sprintf('/catalogs/%s/items', $catalogName), $request, MultipleItemsResponse::class, $resolveResponse);
    }

    /**
     * @see https://www.braze.com/docs/api/endpoints/catalogs/catalog_items/asynchronous/put_update_catalog_items
     */
    public function replaceMultipleItems(MultipleItemsRequest $request, bool $resolveResponse = true): MultipleItemsResponse
    {
        $catalogName = $request->catalog_name;
        $request->catalog_name = null;

        return $this->makeRequest('PUT', sprintf('/catalogs/%s/items', $catalogName), $request, MultipleItemsResponse::class, $resolveResponse);
    }
}
