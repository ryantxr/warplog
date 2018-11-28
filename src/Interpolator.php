<?php namespace Ryantxr\WarpLog;

/**
 *  Logging wrapper.
 *
 *  
 *  Wraps CakeLogger
 *
 *  @author Ryan Teixeira
 */
trait Interpolator
{
    public function interpolate($message, $context=[])
    {
        $replace = [];
        foreach ($context as $key => $val) {
            // check that the value can be casted to string
            if ( ! is_array($val) && ( ! is_object($val) || method_exists($val, '__toString')) ) {
                $replace['{' . $key . '}'] = $val;
            }
        }
    
        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }
}