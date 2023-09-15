<?php

namespace Modules\Pipeline\Listeners;

use Modules\Pipeline\Entities\Stage;
use Modules\Pipeline\Enums\CardEventTypesEnum;
use Modules\Pipeline\Events\CardEvent as Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CardListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Event $event
     * @return void
     */
    public function handle(Event $event)
    {
        \Modules\Pipeline\Entities\CardEvent::create([
            'card_id' => $event->card->id,
            'author_id' => auth()->user()->id,

            'type' => $event->eventType->value,

            'old_value' => $event->eventType === CardEventTypesEnum::STAGE_CHANGE ?
                $this->getStageName($event->card->getOriginal('stage_id')) : null,

            'new_value' => $event->eventType === CardEventTypesEnum::STAGE_CHANGE ?
                $this->getStageName($event->card->stage_id) : null,
        ]);
    }

    private function getStageName(int $stage_id)
    {
        return Stage::find($stage_id)->name;
    }
}
