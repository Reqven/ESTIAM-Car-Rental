<?php

namespace App\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DatePickerTransformer implements DataTransformerInterface
{  
    const PATTERN = '/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/';
    const INVALID_DATE_ERROR = 'date.invalid';

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
     * Transforms a DateTime object to a string .
     *
     * @param  DateTime|null $date
     * @return string
     */
    public function transform($dateTime)
    {
        if (null === $dateTime) {
            return false;
        }
        return $dateTime->format('d/m/Y');
    }

    /**
     * Transforms a string to a DateTime object.
     *
     * @param  string $dateString
     * @return DateTime|null
     * @throws TransformationFailedException if invalid format/date.
     */
    public function reverseTransform($dateString)
    {
        if (!preg_match(static::PATTERN, $dateString, $matches)) {
            throw new TransformationFailedException(self::INVALID_DATE_ERROR);
        }
        if (!static::checkDate($matches[3], $matches[2], $matches[1])) {
            throw new TransformationFailedException(self::INVALID_DATE_ERROR);
        }
        return \DateTime::createFromFormat('d/m/Y', $dateString);
    }
}