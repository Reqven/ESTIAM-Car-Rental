<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContext;

class QuickSearch
{
    public $address;

    /**
     * @Assert\Date()
     * @Assert\GreaterThan("today")
     */
    public $date_start;

    /**
     * @Assert\Date()
     * @Assert\GreaterThan(propertyPath="date_start")
     */
    public $date_end;
}