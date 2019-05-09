<?php

use Step\Acceptance\HomeSteps;
use Step\Acceptance\LoginGithubSteps as LoginSteps;

class LoginGithubCest
{
    /**
     * @var string
     */
    protected $use;
    /**
     * @var string
     */
    protected $pass;

    /**
     * LoginGithubCest constructor.
     */
    public function __construct()
    {
        $this->use="TranThanhh";
        $this->pass="conyeugiadinh136204";
        $this->name="testauto";
        $this->des="test automation";
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     */
    public function  doLogin(LoginSteps $I)
    {
        $I->wantToTest('I want to do Login Success');
        $I->login($this->use, $this->pass);
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     */
    public  function createRepons(LoginSteps $I)
    {
        $I->createReponsitory($this->name, $this->des);
    }

    /**
     * @param HomeSteps $I
     * @throws Exception
     */
    public function cloneValue(HomeSteps $I)
    {
        $I->checkClone();
    }
}
