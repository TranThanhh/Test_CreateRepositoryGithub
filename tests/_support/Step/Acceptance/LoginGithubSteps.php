<?php
namespace Step\Acceptance;

use Page\HomePage;
use Page\LoginGithubPage as Login;

class LoginGithubSteps extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @throws \Exception
     */
    public  function login($user,$pass)
    {
        $I=$this;
        $I->amOnPage(Login::$URLGithub);
        $I->waitForElementVisible(Login::$usernameField,30);
        $I->fillField(Login::$usernameField,$user);
        $I->fillField(Login::$passwordField,$pass);
        $I->click(Login::$buttonSignIn);
    }

    /**
     * @param $name
     * @param $decription
     * @throws \Exception
     */
    public  function createReponsitory($name, $decription)
    {
        $I=$this;
        $I->click(HomePage::$newButton);
        $I->waitForElementVisible(HomePage::$respositoryName,30);
        $I->fillField(HomePage::$respositoryName,$name);
        $I->fillField(HomePage::$decription,$decription);
        $I->waitForElementClickable(HomePage::$buttonCreate);
        $I->click(HomePage::$buttonCreate);
    }
}