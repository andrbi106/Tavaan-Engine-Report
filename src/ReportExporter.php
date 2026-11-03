<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ReportExporter — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Report\Contracts\ReportExporterInterface
 */
final class ReportExporter implements Contracts\ReportExporterInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function csv(/* ... */): mixed
    {
        // TODO: پیاده‌سازی csv مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function xlsx(/* ... */): mixed
    {
        // TODO: پیاده‌سازی xlsx مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function html(/* ... */): mixed
    {
        // TODO: پیاده‌سازی html مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function json(/* ... */): mixed
    {
        // TODO: پیاده‌سازی json مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function pdf(/* ... */): mixed
    {
        // TODO: پیاده‌سازی pdf مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function stream(/* ... */): mixed
    {
        // TODO: پیاده‌سازی stream مطابق مستندات (سند §3 API).
        return null;
    }
}