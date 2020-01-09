<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;

class PhoneNumberValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    { 
        $context = $this->context;
        $phoneUtil = PhoneNumberUtil::getInstance();
        
        if (!preg_match('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/', $value)) {
            $context->buildViolation('user.invalid_phoneNumber')->addViolation();
            return;
        }
        try {
            $phoneNumber = $phoneUtil->parse($value, null);
            if ($phoneUtil->isPossibleNumber($phoneNumber) && $phoneUtil->isValidNumber($phoneNumber)) {
                if ($phoneUtil->getNumberType($phoneNumber) !== PhoneNumberType::MOBILE) {
                    $context->buildViolation('user.phoneNumber_fixedLine_not_allowed')->addViolation();
                }
                return;
            } else {
                $context->buildViolation('user.invalid_phoneNumber')->addViolation();
            }
        } catch (NumberParseException $e) {
            $context->buildViolation('user.invalid_phoneNumber')->addViolation();
        }
    }
}
