<?php declare(strict_types=1);

namespace bizley\tests\table;

use bizley\migration\table\TableColumnUPK;
use bizley\migration\table\TableStructure;
use bizley\tests\cases\TableColumnTestCase;

class TableColumnUPKTest extends TableColumnTestCase
{
    public function testDefinitionSpecific(): void
    {
        $column = new TableColumnUPK(['size' => 11, 'schema' => TableStructure::SCHEMA_MYSQL]);
        $this->assertEquals('$this->primaryKey(11)', $column->renderDefinition($this->getTable(false)));
    }

    public function testDefinitionSpecificNoLength(): void
    {
        $column = new TableColumnUPK(['size' => 11]);
        $this->assertEquals('$this->primaryKey()', $column->renderDefinition($this->getTable(false)));
    }

    public function testDefinitionGeneral(): void
    {
        $column = new TableColumnUPK(['size' => 11]);
        $this->assertEquals('$this->primaryKey()->unsigned()', $column->renderDefinition($this->getTable(true)));
    }
}
