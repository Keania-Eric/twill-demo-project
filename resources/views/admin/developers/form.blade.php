@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'full_name',
        'label' => 'Developer Fullname',
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'avatar',
        'label' => 'Developer Avatar',
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'bio',
        'label' => 'Developer Bio',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'placeholder' => 'A short description of developer bio',
        'maxlength' => 200,
        'note' => 'Hint message',
        ])
@stop
