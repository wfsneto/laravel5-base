<?php

namespace Test\Controllers;

/**
 * @group home
 * @group controllers
 * @group controller_home
 */
class HomeTest extends \TestCase
{
    public $controller_name = 'Home';

    /**
     * @group home_index
     */
    public function testIndex()
    {
        # request
        $crawler = $this->action('GET', $this->controller_url('index'));

        # assertions
        $this->assertResponseOk();
    }
}
