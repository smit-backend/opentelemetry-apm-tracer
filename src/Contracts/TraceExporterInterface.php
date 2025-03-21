<?php

declare(strict_types=1);

namespace SmitBackend\TraceSpan\Contracts;

/**
 * Interface TraceExporterInterface
 *
 * @package SmitBackend\TraceSpan
 */
interface TraceExporterInterface
{
    public function execute(array $payload = []): mixed;
}
