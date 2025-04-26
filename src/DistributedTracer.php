<?php

declare(strict_types=1);

namespace SmitBackend\TraceSpan;

use SmitBackend\TraceSpan\Contracts\TraceExporterInterface;

/**
 * Class DistributedTracer
 *
 * @package SmitBackend\TraceSpan
 */
class DistributedTracer implements TraceExporterInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
