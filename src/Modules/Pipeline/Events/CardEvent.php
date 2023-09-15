<?php

namespace Modules\Pipeline\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Pipeline\Entities\Card;
use Modules\Pipeline\Enums\CardEventTypesEnum;

class CardEvent
{
    use SerializesModels;

    public Card $card;
    public CardEventTypesEnum $eventType;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Card $card, CardEventTypesEnum $eventType)
    {
        $this->card = $card;
        $this->eventType = $eventType;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    /**
     * @param Card $card
     * @return static
     */
    public static function created(Card $card): static
    {
        return new static($card, CardEventTypesEnum::CREATION);
    }

    /**
     * @param Card $card
     * @return static
     */
    public static function updated(Card $card): static
    {
        if($card->wasChanged('stage_id')) {
            return new static($card, CardEventTypesEnum::STAGE_CHANGE);
        }
    }
}
