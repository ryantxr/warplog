<?php namespace Ryantxr\WarpLog;

class WarpLog
{
    public static $logger;
    static public function init(\Psr\Log\LoggerInterface $logger=null)
    {
        self::$logger = ($logger) ? $logger : new \Psr\Log\NullLogger;
    }
    static public function debug($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->debug($msg, $context);
    }
    static public function notice($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->notice($msg, $context);        
    }
    static public function warning($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->warning($msg, $context);
    }
    static public function error($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->error($msg, $context);
    }
    static public function critical($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->critical($msg, $context);
    }

    static public function alert($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->alert($msg, $context);
    }

    static public function emergency($msg, array $context = [])
    {
        if ( ! self::$logger ) {
            self::init(null);
        }
        self::$logger->emergency($msg, $context);
    }
}