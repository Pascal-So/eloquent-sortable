<?php

namespace JMauerhan\EloquentSortable\Test;

use JMauerhan\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use JMauerhan\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class DummyWithSoftDeletes extends Model implements Sortable
{
    use SoftDeletes, SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
