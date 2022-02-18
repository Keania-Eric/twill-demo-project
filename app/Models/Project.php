<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Project extends Model 
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'url',
        'headline',
        'sector',
        'launch_date',
        'commercial',
        'layout'
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            
        ],
        'mobile'=> [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ]
    ];
}
