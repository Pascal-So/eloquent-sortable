<?php

namespace JMauerhan\EloquentSortable\Test;

use JMauerhan\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use JMauerhan\EloquentSortable\SortableTrait;

class Dummy extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
