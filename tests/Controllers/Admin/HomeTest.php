<?php

namespace Test\Controllers\Admin;

/**
 * @group home
 * @group controllers
 * @group admin_controllers
 * @group controller_home
 */
class HomeTest extends \TestCase
{
    public $controller_name = 'Admin\Home';

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
