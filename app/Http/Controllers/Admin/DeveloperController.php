<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class DeveloperController extends BaseModuleController
{
    protected $moduleName = 'developers';

    protected $indexOptions = [
    ];

    protected $titleColumnKey = 'full_name';

    protected $indexColumns = [
        'full_name'=> [
            'title'=> 'Full Name',
            'field'=> 'full_name'
        ]
    ];
}
