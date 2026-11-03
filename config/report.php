<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Report Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور report — همهٔ کلیدهای مستندشده در `docs/03-engines/report.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/report.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('REPORT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('REPORT_PREFIX', 'report:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('REPORT_LOG_CHANNEL', 'report'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Report',
        'accessor' => 'report',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];