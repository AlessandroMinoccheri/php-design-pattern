<?php

namespace Visitor;

interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}