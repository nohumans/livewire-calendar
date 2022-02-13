<?php

namespace Nohumans\LivewireCalendar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nohumans\LivewireCalendar\Skeleton\SkeletonClass
 */
class LivewireCalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-calendar';
    }
}
