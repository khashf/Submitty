<?php

namespace app\exceptions;

class AuthenticationException extends BaseException {
    /**
     * AuthenticationException constructor.
     *
     * @param string      $message
     * @param int         $code
     * @param \Exception  $previous
     */
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, array(), $code, $previous);
    }
}