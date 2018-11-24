<?php

namespace bizley\tests\controllers;

use bizley\migration\controllers\MigrationController;

/**
 * Class MockMigrationController
 * @package bizley\tests
 */
class MockMigrationController extends MigrationController
{
    /**
     * @var string output buffer.
     */
    private $stdOutBuffer = '';

    /**
     * @param string $string
     */
    public function stdout($string)
    {
        $this->stdOutBuffer .= $string;
    }

    /**
     * @return string
     */
    public function flushStdOutBuffer()
    {
        $result = $this->stdOutBuffer;
        $this->stdOutBuffer = '';
        return $result;
    }
}
