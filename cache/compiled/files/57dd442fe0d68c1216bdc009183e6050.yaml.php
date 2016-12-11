<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/cmiller/GoogleDrive/local/personal/mamp_sites/scholarship_new/user/plugins/archives/archives.yaml',
    'modified' => 1480993708,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog'
        ],
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ]
    ]
];
