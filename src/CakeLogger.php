<?php namespace Ryantxr\WarpLog;

/**
 *  Logging wrapper.
 *  Want logging that is source compatible with Laravel and CakePHP 2.x and possibly others.
 *  Wraps CakeLogger from CakePHP 2.x
 *
 *  @author Ryan Teixeira
 */
class CakeLogger extends \Psr\Log\AbstractLogger
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
        // NOTE: the following will only work in a CakePHP 2.x environment.
        \CakeLog::write($level, $this->interpolate($message, $context));
    }
}
