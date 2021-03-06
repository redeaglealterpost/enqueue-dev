<?php

declare(strict_types=1);

namespace Enqueue\Null;

use Interop\Queue\PsrConnectionFactory;
use Interop\Queue\PsrContext;

class NullConnectionFactory implements PsrConnectionFactory
{
    /**
     * @return NullContext
     */
    public function createContext(): PsrContext
    {
        return new NullContext();
    }
}
