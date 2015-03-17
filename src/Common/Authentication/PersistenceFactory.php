<?php

namespace Common\Authentication;

use Common\Authentication\InMemory;
use Common\Authentication\FileBased;

class PersistenceFactory implements IFactory
{

    public function create()
    {
        return new InMemory();
    }

    public function createInMemoryPersistence()
    {
        return new InMemory();
    }

    public function createFileBasedPersistence()
    {
        return new FileBased();
    }
}