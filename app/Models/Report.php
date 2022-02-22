<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Report extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'project_id'
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
