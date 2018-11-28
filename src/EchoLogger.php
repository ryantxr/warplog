<?php namespace Ryantxr\WarpLog;

/**
 *  Logging wrapper.
 *  Want logging that is source compatible with Laravel and CakePHP 2.x and possibly others.
 *  Echo
 *
 *  @author Ryan Teixeira
 */
class EchoLogger extends \Psr\Log\AbstractLogger
{
    use Interpolator;
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        echo sprintf("[%s] %s\n", $level, $this->interpolate($message, $context));
    }
}


