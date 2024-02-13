<?php

namespace Tests\Unit;

use Illuminate\View\Compilers\BladeCompiler;
use T\Heroicons\Icon;
use Tests\TestCase;

class RegisterIconComponentAliasTest extends TestCase
{
    /**
     * @define-env defineEnvironmentIconAllias
     */
    public function test_should_register_the_icon_blade_component_with_a_custom_alias()
    {
        $bladeCompiler = resolve(BladeCompiler::class);

        $aliases = $bladeCompiler->getClassComponentAliases();

        $this->assertArrayHasKey('custom-icon', $aliases, 'The custom alias should be registered');
        $this->assertSame($aliases['custom-icon'], Icon::class);
    }

    /**
     * @define-env defineEnvironmentIconAlliasFalse
     */
    public function test_should_not_register_the_icon_component()
    {
        $bladeCompiler = resolve(BladeCompiler::class);

        $aliases = $bladeCompiler->getClassComponentAliases();

        $this->assertArrayNotHasKey('custom-icon', $aliases, "The custom alias shouldn't be registered");
    }
}
