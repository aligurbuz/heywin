<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Services\AppContainer;

class User
{
    /**
     * @return mixed
     */
    public static function get(): object
    {
        return AppContainer::use('user', static function () {
            return Guard::get()->user();
        });
    }

    /**
     * this code looks at the user's status and is_deleted fields.
     * It will throw an exception if the status field value is 0 or the is_deleted field is 1.
     *
     * @return void
     */
    public static function isActive(): void
    {
        /*** @var object $user */
        $user = static::get();

        if ($user->is_deleted) {
            Exception::customException('deletedUser');
        }

        if (!$user->status) {
            Exception::customException('notActiveUser');
        }
    }

    /**
     * get user code
     *
     * @return string|null
     */
    public static function code(): ?string
    {
        return static::get()?->{Guard::code()};
    }

    /**
     * get user email
     *
     * @return string|null
     */
    public static function email(): ?string
    {
        return static::get()?->email;
    }

    /**
     * get user phone
     *
     * @param bool $exception
     * @return string|null
     */
    public static function phone(bool $exception = false): ?string
    {
        $phone = Phone::get();

        if (is_null($phone) && $exception) {
            Exception::customException('invalid_phone');
        }

        return $phone;
    }

    /**
     * Checks the validity of the email for the user.
     *
     * @param string $email
     * @param bool $auth
     * @return array
     */
    public static function setContainer(string $email, bool $auth = true): array
    {
        $user = Guard::repository()->instance($auth)->where('email', $email)->active()->first();

        if (is_null($user)) {
            Exception::customException('invalid_email');
        }

        AppContainer::setWithTerminating('user', $user);

        return $user->toArray();
    }
}
