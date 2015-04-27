<?php

use App\Http\Middleware\VerifyCsrfToken;
use App\User;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        Session::start();

        $this->token = csrf_token();

        $this->faker = Faker\Factory::create();

        $this->prepareForTests();
    }

    protected function controller_url($action)
    {
        return $this->controller_name . 'Controller@' . $action;
    }

    private function prepareForTests()
    {
        $user = User::firstOrCreate([ 'email' => 'admin@admin.com' ]);
        Auth::loginUsingId( $user->id );
    }
}
