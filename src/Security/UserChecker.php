<?php

namespace App\Security;

use App\Entity\Account;
use App\Exception\UnverifiedException;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof Account) {
            return;
        }

        // user is deleted, show a generic Account Not Found message.
        if ($user->isVerified()) {
            throw new UnverifiedException();
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof Account) {
            return;
        }

        // user account is expired, the user may be notified
        //if ($user->isExpired()) {
            //throw new AccountExpiredException('...');
        //}
    }
}