<?php

namespace App\Security;

use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class L2Encoder extends BasePasswordEncoder implements PasswordEncoderInterface
{
    private $ignorePasswordCase;

    public function __construct($ignorePasswordCase = false)
    {
        $this->ignorePasswordCase = $ignorePasswordCase;
    }

    public function encodePassword($raw, $salt)
    {
        // TODO: Implement encodePassword() method.
        //return crypt($raw,$salt);
        return base64_encode(pack("H*", sha1(utf8_encode($raw))));
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        // TODO: Implement isPasswordValid() method.
        if ($this->isPasswordTooLong($raw)) {
            return false;
        }

        try {
            $pass2 = $this->encodePassword($raw, $salt);
        } catch (BadCredentialsException $e) {
            return false;
        }

        if (!$this->ignorePasswordCase) {
            return $this->comparePasswords($encoded, $pass2);
        }

        return $this->comparePasswords(strtolower($encoded), strtolower($pass2));
    }
}