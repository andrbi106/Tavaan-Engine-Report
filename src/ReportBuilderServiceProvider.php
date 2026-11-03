<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Report\Contracts\ReportBuilderInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ReportBuilderServiceProvider — ثبت سرویس‌های موتور ReportBuilder.
 */
final class ReportBuilderServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ReportBuilderInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new ReportBuilder($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('report', $this->app->get(ReportBuilderInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ReportBuilderInterface::class,
            'report',
        ];
    }
}