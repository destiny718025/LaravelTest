<?php

namespace Tests;

use App\Article;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
//    use RefreshDatabase;

    protected function userLoggedIn()
    {
        $this->be(new User(['email' => 'username@example.com']));
    }
}
