<?php

namespace Tests\Browser;

use App\User;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;




abstract class DuskTestCase extends BaseTestCase
{


    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        //static::startChromeDriver();
    }



    protected function driver()
    {
        return RemoteWebDriver::create(
            'http://localhost:8000'
        );
    }
}
