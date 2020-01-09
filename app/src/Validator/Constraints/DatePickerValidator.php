<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class DatePickerValidator extends ConstraintValidator
{
    const PATTERN = '/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/';

    /**
     * Checks whether a date is valid.
     *
     * @param int $year  The year
     * @param int $month The month
     * @param int $day   The day
     *
     * @return bool Whether the date is valid
     *
     * @internal
     */
    public static function checkDate($year, $month, $day)
    {
        return checkdate($month, $day, $year);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (null === $value || '' === $value) {
            return;
        }
        return;
        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            return $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(DatePicker::INVALID_FORMAT_ERROR)
                ->addViolation();
        }
        if (!static::checkDate($matches[3], $matches[2], $matches[1])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(DatePicker::INVALID_FORMAT_ERROR)
                ->addViolation();
        }
        return;
    }
}
