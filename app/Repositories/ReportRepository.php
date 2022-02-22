<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Report;

class ReportRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs;

    public function __construct(Report $model)
    {
        $this->model = $model;
    }
}
