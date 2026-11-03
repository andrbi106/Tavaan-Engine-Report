<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Report\ReportBuilder;
use Tavaan\Engine\Report\ReportExporter;

/**
 * T-NN scenario tests for the report engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class ReportScenarioTest extends TestCase
{'    public function t01_builder_add_row_and_count(): void\n    {\n        // Scenario T-01\n$b = new ReportBuilder("sales");\n        $b->addRow(["id" => 1, "amount" => 100]);\n        $b->addRow(["id" => 2, "amount" => 200]);\n        $this->assertSame(2, $b->count());\n    }\n    public function t02_builder_to_csv(): void\n    {\n        // Scenario T-02\n$b = new ReportBuilder("sales");\n        $b->setColumns(["id", "amount"]);\n        $b->addRow(["id" => 1, "amount" => 100]);\n        $csv = $b->toCsv();\n        $this->assertStringContainsString("id", $csv);\n        $this->assertStringContainsString("100", $csv);\n    }\n    public function t03_builder_to_json(): void\n    {\n        // Scenario T-03\n$b = new ReportBuilder("sales");\n        $b->addRow(["id" => 1]);\n        $json = $b->toJson();\n        $this->assertStringContainsString("sales", $json);\n    }\n    public function t04_exporter_csv_output(): void\n    {\n        // Scenario T-04\n$b = new ReportBuilder("sales");\n        $b->setColumns(["id"]);\n        $b->addRow(["id" => 1]);\n        $report = $b->build();\n        $ex = new ReportExporter($report);\n        $csv = $ex->csv();\n        $this->assertStringContainsString("id", $csv);\n    }\n    public function t05_exporter_html_output(): void\n    {\n        // Scenario T-05\n$b = new ReportBuilder("sales");\n        $b->setColumns(["id"]);\n        $b->addRow(["id" => 1]);\n        $ex = new ReportExporter($b->build());\n        $html = $ex->html();\n        $this->assertStringContainsString("<table", $html);\n        $this->assertStringContainsString("</table>", $html);\n    }'}
