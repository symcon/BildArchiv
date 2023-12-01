<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class BildArchivValidationTest extends TestCaseSymconValidation
{
    public function testValidateBildArchiv(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateImageArchiveModule(): void
    {
        $this->validateModule(__DIR__ . '/../ImageArchive');
    }
}