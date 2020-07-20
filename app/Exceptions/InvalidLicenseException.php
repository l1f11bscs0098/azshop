<?php

namespace azshop\Exceptions;

use Exception;
use azshop\License;

class InvalidLicenseException extends Exception
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;

        resolve(License::class)->deleteLicenseFile();
    }

    public function render()
    {
        return redirect()->route('license.create')
            ->with('error', $this->message);
    }
}
