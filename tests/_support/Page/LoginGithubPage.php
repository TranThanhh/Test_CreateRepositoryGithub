<?php
namespace Page;

class LoginGithubPage
{
    /**
     * @var string
     */
    public  static $URLGithub='/login';
    /**
     * @var string
     */
    public  static $usernameField='//input[@id="login_field"]';
    /**
     * @var string
     */
    public  static $passwordField='//input[@id="password"]';
    /**
     * @var string
     */
    public static $buttonSignIn='Sign in';

    /**
     * @param $param
     * @return string
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
