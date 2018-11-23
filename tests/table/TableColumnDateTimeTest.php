<?php declare(strict_types=1);

namespace bizley\tests\table;

use bizley\migration\table\TableColumnDateTime;
use bizley\migration\table\TableStructure;
use bizley\tests\cases\TableColumnTestCase;

class TableColumnDateTimeTest extends TableColumnTestCase
{
    public function testDefinitionSpecific(): void
    {
        $column = new TableColumnDateTime(['precision' => 4, 'schema' => TableStructure::SCHEMA_PGSQL]);
        $this->assertEquals('$this->dateTime(4)', $column->renderDefinition($this->getTable(false)));
    }

    public function testDefinitionSpecificNoLength(): void
    {
        $column = new TableColumnDateTime(['precision' => 4]);
        $this->assertEquals('$this->dateTime()', $column->renderDefinition($this->getTable(false)));
    }

    public function testDefinitionGeneral(): void
    {
        $column = new TableColumnDateTime(['precision' => 4]);
        $this->assertEquals('$this->dateTime()', $column->renderDefinition($this->getTable()));
    }
}
