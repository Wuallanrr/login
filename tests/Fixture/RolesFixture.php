<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'funcao' => 'Lorem ipsum dolor ',
                'created' => '2024-10-01 16:37:45',
                'modified' => '2024-10-01 16:37:45',
            ],
        ];
        parent::init();
    }
}
