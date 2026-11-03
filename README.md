# Tavaan Engine — Report

> **گزارش‌ساز** — موتور Report در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.report` |
| نام | `Report` |
| عنوان فارسی | گزارش‌ساز |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Report` |
| نوع | `engine` |
| Facade | `Report` (accessor: `report`) |

## توضیحات

M7 — Dataset (Closure/QueryBuilder/SQL/آرایه) + فیلترهای allowlist، Group/Subtotal، Pivot، Aggregate با Decimal (بدون float — ADR-0013)، تاریخ جلالی، خروجی CSV (BOM+delimiter «;»+streaming+🔒 ضد CSV Injection)، xlsx خودنوشته OOXML با ZipWriterPure (بدون PhpSpreadsheet/ext-zip)، HTML با قالب report::table + fallback escaped، JSON، PDF اختیاری، 🔒 sandbox مسیر export و max_rows.

## خطاها (Exceptions)

- `Tavaan\Engine\Report\Exceptions\ReportException`

## Facadeها

- `Tavaan\Engine\Report\Facades\Report`

## کلاس‌های اصلی

- `src/Aggregator.php`
- `src/DatasetResolver.php`
- `src/Export/CsvExporter.php`
- `src/Export/HtmlExporter.php`
- `src/Export/JsonExporter.php`
- `src/Export/PdfExporter.php`
- `src/Export/XlsxExporter.php`
- `src/Export/XlsxWriter.php`
- `src/Field.php`
- `src/Filter.php`
- `src/Formatter.php`
- `src/PivotBuilder.php`
- `src/PivotConfig.php`
- `src/ReportExporter.php`
- `src/ReportResolver.php`
- `src/ReportResult.php`
- `src/report.php`

## Service Providerها

- `Tavaan\Engine\Report\ReportBuilderServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

**موتورهای اختیاری:**

- `database`
- `filesystem`
- `view`
- `i18n`
- `compat`
- `http`

## پیکربندی

- فایل پیکربندی: `config/report.php`
- کلید: `report`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Report.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Report`** (این مخزن) | موتور Report |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
