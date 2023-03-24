<?php

namespace Elastic\Apm\Impl;

/**
 * Code in this file is part of implementation internals and thus it is not covered by the backward compatibility.
 *
 * @internal
 */
interface FileReaderInterface
{
    /**
     * @param string $path
     * @return bool
     */
    public function isReadable(string $path): bool;

    /**
     * @param string $path
     * @return ?string
     */
    public function read(string $path): ?string;
}
