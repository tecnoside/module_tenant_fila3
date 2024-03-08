<?php

declare(strict_types=1);

namespace Modules\Tenant\Tests\Unit\Database\Seeders;

use Modules\Tenant\Database\Seeders\TenantDatabaseSeeder;
use Tests\TestCase;

/**
 * Class TenantDatabaseSeederTest.
 *
 * @covers \Modules\Tenant\Database\Seeders\TenantDatabaseSeeder
 */
final class TenantDatabaseSeederTest extends TestCase
{
    private TenantDatabaseSeeder $tenantDatabaseSeeder;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /**
*
         *
 * @todo Correctly instantiate tested object to use it.
*/
        $this->tenantDatabaseSeeder = new TenantDatabaseSeeder();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->tenantDatabaseSeeder);
    }

    public function testRun(): void
    {
        /**
*
         *
 * @todo This test is incomplete.
*/
        self::markTestIncomplete();
    }
}
