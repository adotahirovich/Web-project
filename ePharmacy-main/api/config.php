<?php

class Config
{
    public static function DB_HOST()
    {
        return Config::get_env("DB_HOST", "localhost");
    }
    public static function DB_USERNAME()
    {
        return Config::get_env("DB_USERNAME", "root");
    }
    public static function DB_PASSWORD()
    {
        return Config::get_env("DB_PASSWORD", "3306");
    }
    public static function DB_SCHEME()
    {
        return Config::get_env("DB_SCHEME", "epharmacy");
    }
    public static function DB_PORT()
    {
        return Config::get_env("DB_PORT", "3306");
    }
    public static function get_env($name, $default)
    {
        return isset($_ENV[$name]) && trim($_ENV[$name]) != '' ? $_ENV[$name] : $default;
    }
    
    //ovde mozes koristiti ili mailgun kao ja, ili gmail samo ne znam kako ide gmail, to ima lab snimljen za to
    const SMTP_HOST = "smtp.mailgun.org";
    const SMTP_PORT = 587;

    //Ovo dvoje ispod moras kreirati account na mailgun ili koristeci svoj gmail, mailgun znam kako ide, gmail 
    //ne znam njega je keco koristio, tako da odaberi pa samo kad registrujes acc ubaci dole info
    
    const SMTP_USER = "";
    const SMTP_PASSWORD = "";
}
