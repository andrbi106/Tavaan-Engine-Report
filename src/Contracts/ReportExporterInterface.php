<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report\Contracts;

/**
 * قرارداد ReportExporter.
 *
 * @see \Tavaan\Engine\Report\ReportExporter
 * @api 1.0
 */
interface ReportExporterInterface
{
    /**
     * متد csv.
     *
     * @return mixed
     */
    public function csv(/* ... */): mixed;

    /**
     * متد xlsx.
     *
     * @return mixed
     */
    public function xlsx(/* ... */): mixed;

    /**
     * متد html.
     *
     * @return mixed
     */
    public function html(/* ... */): mixed;

    /**
     * متد json.
     *
     * @return mixed
     */
    public function json(/* ... */): mixed;

    /**
     * متد pdf.
     *
     * @return mixed
     */
    public function pdf(/* ... */): mixed;

    /**
     * متد stream.
     *
     * @return mixed
     */
    public function stream(/* ... */): mixed;
}