<?php

/**
 * Elastic Developer Toolbar (http://mateuszsitek.com/projects/elastic-developer-toolbar)
 *
 * @copyright Copyright (c) 2017-2018 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Test\Aist\Developer\Toolbar\Elastic\Collector;

use Aist\Developer\Toolbar\Elastic\Collector\ElasticCollector;
use PHPUnit\Framework\TestCase;

class ElasticCollectorTest extends TestCase
{
    public function testGetName()
    {
        $collector = new ElasticCollector();
        $name = $collector->getName();

        $this->assertSame('elastic.toolbar', $name);
    }

    public function testGetPriority()
    {
        $collector = new ElasticCollector();
        $priority = $collector->getPriority();

        $this->assertTrue(is_int($priority));
    }
}
