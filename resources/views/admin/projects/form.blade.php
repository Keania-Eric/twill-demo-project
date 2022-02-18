@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'project-covers', 'label' => 'Project Covers'],
    ]
])

@section('contentFields')

@formField('input', [
'name' => 'headline',
'label' => 'Project Headline',
'placeholder'=> 'The Amazing laravel project',
'maxlength' => 200
])

@formField('input', [
    'name'=> 'url',
    'label'=> 'Website Url',
    'placeholder'=> 'https://twill.io'
])

@formField('select', [
    'name' => 'sector',
    'label' => 'Project Sector',
    'placeholder' => 'Pick a project sector',
    'options' => [
        [
            'value' => 1,
            'label' => 'Agriculture'
        ],
        [
            'value' => 2,
            'label' => 'Fashion & Lifestyle'
        ],
        [
            'value' => 3,
            'label' => 'Commercial'
        ]
    ]
])

@formField('select', [
    'name' => 'layout',
    'label' => 'Project Layout',
    'placeholder' => 'What was the project layout',
    'unpack'=> true,
    'options' => [
        [
            'value' => 1,
            'label' => 'Evenly Designed'
        ],
        [
            'value' => 2,
            'label' => 'Image Centric'
        ],
        [
            'value' => 3,
            'label' => 'Text Centric'
        ]
    ]
])

@formField('checkbox', [
    'name'=> 'commercial',
    'label'=> 'Commercial',
    'note'=> 'Was money taken from the project',
])

@formField('date_picker', [
    'name' => 'launch_date',
    'label' => 'Launch Date',
    'minDate' => '2017-09-10 12:00',
    'maxDate' => '2022-12-10 12:00'
])

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Project Description',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'placeholder' => 'A short description of project',
    'maxlength' => 200,
    'note' => 'Hint message',
])

@stop

@section('fieldsets')
    @formFieldset(['id' => 'project-covers', 'title' => 'Project Covers'])
        @formField('medias', [
        'name' => 'cover',
        'label' => 'Project Cover',
        'fieldNote' => 'Minimum image width: 1500px'
    ])
    @formField('medias', [
        'name' => 'mobile',
        'label' => 'Project Mobile Cover',
        'fieldNote' => 'Minimum image width: 1500px'
    ])
    @endformFieldset
@stop