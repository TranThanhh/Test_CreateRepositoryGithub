<?php
namespace Step\Acceptance;

use Page\HomePage;

class HomeSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public  function  checkClone()
    {
        $I=$this;
        $I->waitForElement(HomePage::$cloneValue,30);
    }
}