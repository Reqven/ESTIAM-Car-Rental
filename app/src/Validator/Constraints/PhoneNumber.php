<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class PhoneNumber extends Constraint
{
    const NOT_FOUND = 'user_email.not_found';
    const INVALID_EMAIL = 'user_email.invalid';
}
