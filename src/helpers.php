<?php
if (! function_exists('bcrypt')) {
    /**
     * Hash the given value against the bcrypt algorithm.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    function bcrypt($value, $options = [])
    {
        return \Hyperf\Utils\ApplicationContext::getContainer()->get(\Hyperf\Hashing\Driver\BcryptDriver::class)->make($value, $options);
    }
}