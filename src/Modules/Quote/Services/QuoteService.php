<?php

namespace Modules\Quote\Services;

use Illuminate\Database\Eloquent\Model;
use Modules\Quote\Entities\Quote;
use Modules\Quote\Repositories\QuoteItemRepositoryInterface;
use Modules\Quote\Transformers\QuoteResource;
use Modules\Core\Services\BaseService;
use Modules\Quote\Repositories\QuoteRepositoryInterface;
use Modules\Quote\Transformers\QuoteResourceCollection;

class QuoteService extends BaseService
{
    /**
     * @var string $resource_collection
     */
    public string $resource_collection = QuoteResourceCollection::class;

    /**
     * @var string $resource
     */
    public string $resource = QuoteResource::class;

    /**
     * @param QuoteRepositoryInterface $repository
     * @param QuoteItemRepositoryInterface $quote_item_repository
     */
    public function __construct(
        QuoteRepositoryInterface $repository,
        public QuoteItemRepositoryInterface $quote_item_repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * @param Quote|Model $quote
     * @param array $items
     * @return void
     */
    public function createQuoteItems(Quote|Model $quote, array $items): void
    {
        foreach ($items as $item)
        {
            $this->quote_item_repository->create([
                'quote_id' => $quote->id,
                ...$item
            ]);
        }
    }

    /**
     * @param Quote|Model $quote
     * @param array $items
     * @return void
     */
    public function updateQuoteItems(Quote|Model $quote, array $items): void
    {
        $this->destroyQuoteItems( $quote );
        $this->createQuoteItems( $quote, $items );
    }

    /**
     * @param Quote|Model $quote
     * @return void
     */
    public function destroyQuoteItems(Quote|Model $quote): void
    {
        $quote->items()->delete();
    }
}
