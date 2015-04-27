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

        echo '<pre>';
        print_r($crawler->getContent());
        print_r('<hr />' . basename(__FILE__) . ':' . __LINE__);die;

        # assertions
        $this->assertResponseOk();
	}
}
