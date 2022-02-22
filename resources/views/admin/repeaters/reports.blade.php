@twillRepeaterTitle('Report')
@twillRepeaterTrigger('Add Report')
@twillRepeaterMax('3')

@formField('input', [
    'name' => 'title',
    'label' => 'Report Title',
    'fieldNote' => 'A sharp title of report'
])

@formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Report Description',
        'fieldNote' => 'A summary of reports '
    ])
