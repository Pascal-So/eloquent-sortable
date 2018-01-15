<?php

namespace JMauerhan\EloquentSortable\Test;

use JMauerhan\EloquentSortable\Test\Dummy;

use JMauerhan\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use JMauerhan\EloquentSortable\SortableTrait;

class DummyWithGroups extends Dummy
{
    public $sortable = [
        'sort_by_group_column' => 'group_column',
    ];
}
