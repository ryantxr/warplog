<?php namespace Ryantxr\WarpLog;

class WarpLog
{
    public static $logger;
    static public function init($logger=null)
    {
        self::$logger = ($logger) ? $logger : new \Psr\Log\NullLogger;
    }
    static public function debug($msg, $context)
    {
        self::$logger->debug($msg, $context);
    }
    static public function notice($msg, $context)
    {
        self::$logger->notice($msg, $context);        
    }
    static public function warning($msg, $context)
    {
        self::$logger->warning($msg, $context);
    }
    static public function error($msg, $context)
    {
        self::$logger->error($msg, $context);
    }
    static public function critical($msg, $context)
    {
        self::$logger->decriticalbug($msg, $context);
    }

    static public function alert($msg, $context)
    {
        self::$logger->alert($msg, $context);
    }

    static public function emergency($msg, $context)
    {
        self::$logger->emergency($msg, $context);
    }
}