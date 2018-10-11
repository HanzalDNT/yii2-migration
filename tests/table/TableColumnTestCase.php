<?php

namespace bizley\tests\table;

use bizley\migration\table\TablePrimaryKey;
use bizley\migration\table\TableStructure;

class TableColumnTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @param bool $generalSchema
     * @param bool $composite
     * @param string|null $schema
     * @return TableStructure
     */
    public function getTable($generalSchema = true, $composite = false, $schema = null)
    {
        return new TableStructure([
            'name' => 'table',
            'generalSchema' => $generalSchema,
            'primaryKey' => new TablePrimaryKey([
                'columns' => $composite ? ['one', 'two'] : ['one'],
            ]),
            'schema' => $schema,
        ]);
    }
}
