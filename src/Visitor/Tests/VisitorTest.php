<?php

namespace Visitor\Tests;

use PHPUnit\Framework\TestCase;
use Visitor\Group;
use Visitor\Role;
use Visitor\RoleVisitor;
use Visitor\User;

class VisitorTest extends TestCase
{
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Alessandro')],
            [new Group('admin')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}