<?php

namespace spec\Cherif\Web\Controller;

use Cherif\Web\Controller\SiteController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SiteControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SiteController::class);
    }
}
