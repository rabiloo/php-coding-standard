<?php

namespace Rabiloo\CodingStandard\Tests;

use Orchestra\Testbench\TestCase;
use Rabiloo\CodingStandard\ServiceProvider;

class ServiceProviderTest extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    /** @test */
    public function it_should_publish_some_files()
    {
        $stubDir = dirname(__DIR__) . '/stub/laravel';
        $files = [
            $stubDir . '/phpcs.xml' => base_path('phpcs.xml.dist'),
            $stubDir . '/pint.json' => base_path('pint.json'),
        ];

        $this->artisan('vendor:publish', [
            '--provider' => 'Rabiloo\\CodingStandard\\ServiceProvider',
            '--tag' => 'rabiloo-coding-standard',
        ]);

        sleep(2);

        foreach ($files as $sourceFile => $targetFile) {
            $this->assertFileExists($targetFile);
            $this->assertEquals(file_get_contents($sourceFile), file_get_contents($targetFile));
        }
    }
}
