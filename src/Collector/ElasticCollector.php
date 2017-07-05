<?php

/**
 * Elastic Developer Toolbar (http://mateuszsitek.com/projects/elastic-developer-toolbar)
 *
 * @copyright Copyright (c) 2017-2018 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Developer\Toolbar\Elastic\Collector;

use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\CollectorInterface;

/**
 * Elastic Data Collector
 */
class ElasticCollector implements CollectorInterface
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'elastic.toolbar';
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {
        return 16;
    }

    /**
     * @inheritdoc
     */
    public function collect(MvcEvent $e)
    {
    }
}
