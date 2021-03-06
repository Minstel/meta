<?php

declare(strict_types=1);

namespace Jasny\Meta\Source;

/**
 * Interface for meta sources
 */
interface SourceInterface
{
    /**
     * Obtain meta data for class as array
     *
     * @param string $class
     * @return array
     */
    public function forClass(string $class): array;
}
