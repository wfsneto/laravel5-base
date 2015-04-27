<?php

namespace Test\Controllers\Admin;

# Models
use \App\Models\Region;

/**
 * @group regions
 * @group controllers
 * @group admin_controllers
 * @group controller_regions
 */
class RegionsTest extends \TestCase
{
    public $controller_name = 'Regions';
    /**
     * setUp run before each test
     */
    public function setUp()
    {
        parent::setUp();

        $this->data = [
            '_token' => $this->token,
            'code' => $this->faker->word,
            'name' => $this->faker->name,
        ];

        $this->region = Region::create([
            'code' => $this->faker->word,
            'name' => $this->faker->name,
        ]);
    }

    public function tearDown()
    {
        parent::tearDown();
        Region::find( $this->region->id )->forceDelete();
    }

    /**
     * @group regions_index
     */
    public function testIndex()
    {
        # request
        $crawler = $this->action('GET', $this->controller_url('index'));

        # assertions vars
        $this->assertViewHas('regions');

        # assertions
        $this->assertResponseOk();
    }

    /**
     * @group regions_create
     */
    public function testCreate()
    {
        # request
        $crawler = $this->action('GET', $this->controller_url('create'));

        # assertions vars
        $this->assertViewHas('region');

        # assertions
        $this->assertResponseOk();
    }

    /**
     * @group regions_store
     */
    public function testStoreSuccess()
    {
        # request
        $crawler = $this->action('POST', $this->controller_url('store'), $this->data);

        # assertions
        $this->assertResponseStatus(302);
        $this->assertRedirectedToAction( $this->controller_url('index') );
    }

    /**
     * @group regions_edit
     * @group regions_edit_success
     */
    public function testEditSuccess()
    {
        # request
        $crawler = $this->action('GET', $this->controller_url('edit'), $this->region->id);

        # assertions vars
        $this->assertViewHas('region');

        # assertions
        $this->assertResponseOk();
    }

    /**
     * @group regions_edit
     * @group regions_edit_failed
     */
    public function testEditFaield()
    {
        $region_id = Region::orderBy('id', 'desc')->limit(1)->first()->id + 1;

        # request
        $crawler = $this->action('GET', $this->controller_url('edit'), $region_id);

        # assertions
        $this->assertResponseStatus(302);
        $this->assertRedirectedToAction( $this->controller_url('index') );
    }

    /**
     * @group regions_update
     */
    public function testUpdateSuccess()
    {
        # request
        $this->action('PUT', $this->controller_url('update'), $this->region->id, $this->data);

        # assertions
        $this->assertResponseStatus(302);
        $this->assertRedirectedToAction( $this->controller_url('index') );
    }

    /**
     * @group regions_destroy
     */
    public function testDestroy()
    {
        # request
        $crawler = $this->action('DELETE', $this->controller_url('destroy'), $this->region->id, [ '_token' => $this->token ]);

        # assertions
        $this->assertResponseStatus(302);
        $this->assertRedirectedToAction( $this->controller_url('index') );
        $this->assertEmpty( Region::find($this->region->id) );
    }
}
