<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Developer;

class DeveloperRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Developer $model)
    {
        $this->model = $model;
    }
}
