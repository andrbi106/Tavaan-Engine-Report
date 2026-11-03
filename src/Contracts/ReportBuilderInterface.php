<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report\Contracts;

/**
 * قرارداد ReportBuilder.
 *
 * @see \Tavaan\Engine\Report\ReportBuilder
 * @api 1.0
 */
interface ReportBuilderInterface
{
    /**
     * متد dataset.
     *
     * @return mixed
     */
    public function dataset(/* ... */): mixed;

    /**
     * متد addField.
     *
     * @return mixed
     */
    public function addField(/* ... */): mixed;

    /**
     * متد addFilter.
     *
     * @return mixed
     */
    public function addFilter(/* ... */): mixed;

    /**
     * متد groupBy.
     *
     * @return mixed
     */
    public function groupBy(/* ... */): mixed;

    /**
     * متد pivot.
     *
     * @return mixed
     */
    public function pivot(/* ... */): mixed;

    /**
     * متد orderBy.
     *
     * @return mixed
     */
    public function orderBy(/* ... */): mixed;

    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;
}