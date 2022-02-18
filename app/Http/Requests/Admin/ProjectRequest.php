<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class ProjectRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [
            'url'=> 'required|url',
            'headline'=> 'required|string',
            'description'=> 'required',
            'sector'=> 'required',
            'commercial'=> 'required',
            'launch_date'=> 'required',
            'layout'=> 'required'
        ];
    }
}
