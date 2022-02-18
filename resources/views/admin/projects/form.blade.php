@extends('twill::layouts.form')

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

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Project Description',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'placeholder' => 'A short description of project',
    'maxlength' => 200,
    'note' => 'Hint message',
])

@formField('medias', [
    'name' => 'cover',
    'label' => 'Project Cover',
    'fieldNote' => 'Minimum image width: 1500px'
])
@stop