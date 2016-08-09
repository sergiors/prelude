<?php

namespace Prelude\Tests;

use function Prelude\getIn;

class GetInTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnNestedArray()
    {
        $user = [
            'username' => 'sally',
            'profile' => [
                'name' => 'Sally Clojurian',
                'address' => [
                    'city' => 'Austin',
                    'state' => 'TX'
                ]
            ]
        ];

        $this->assertEquals('Sally Clojurian', getIn($user, ['profile', 'name']));
        $this->assertEquals('Austin', getIn($user, ['profile', 'address', 'city']));
        $this->assertEquals('no zip code!', getIn($user, ['profile', 'address', 'zip-code'], 'no zip code!'));
        $this->assertEquals('no zip code!', getIn($user, [], 'no zip code!'));
    }
}
