<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Developer extends Model 
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'full_name',
        'bio'
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ]
        ],
    ];
}
