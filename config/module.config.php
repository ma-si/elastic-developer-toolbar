<?php

/**
 * Elastic Developer Toolbar (http://mateuszsitek.com/projects/elastic-developer-toolbar)
 *
 * @copyright Copyright (c) 2017-2018 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

return [
    'service_manager' => [
        'invokables' => [
            'elastic.toolbar' => Aist\Developer\Toolbar\Elastic\Collector\ElasticCollector::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'template_map' => [
            'zend-developer-tools/toolbar/elastic-data' => __DIR__ . '/../view/zend-developer-tools/toolbar/elastic-data.phtml',
        ],
    ],
    'zenddevelopertools' => [
        'profiler' => [
            'collectors' => [
                'elastic.toolbar' => 'elastic.toolbar',
            ],
        ],
        'toolbar' => [
            'entries' => [
                'elastic.toolbar' => 'zend-developer-tools/toolbar/elastic-data',
            ],
        ],
    ],
];
