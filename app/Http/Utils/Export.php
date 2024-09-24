<?php

namespace App\Utils;

use App\Models\Assets;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Export
{
    public static function exportToExcel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Nama Barang');
        $sheet->setCellValue('B1', 'Kode Asset');
        $sheet->setCellValue('C1', 'QR Code');
        $sheet->setCellValue('D1', 'Kode Telkom');
        $sheet->setCellValue('E1', 'Serial Number');
        $sheet->setCellValue('F1', 'Lokasi');
        $sheet->setCellValue('G1', 'Keterangan');
        $sheet->setCellValue('H1', 'Kondisi');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Pelabuhan');

        $assets = Assets::all(); // Replace 'Asset' with your actual model and table name if different

        // Populate data rows
        $row = 2; // Start from the second row
        foreach ($assets as $asset) {
            $sheet->setCellValue('A' . $row, $asset->namaBarang);
            $sheet->setCellValue('B' . $row, $asset->kodeAsset);
            $sheet->setCellValue('C' . $row, $asset->qrCode);
            $sheet->setCellValue('D' . $row, $asset->kodeTelkom);
            $sheet->setCellValue('E' . $row, $asset->serialNumber);
            $sheet->setCellValue('F' . $row, $asset->lokasi);
            $sheet->setCellValue('G' . $row, $asset->keterangan);
            $sheet->setCellValue('H' . $row, $asset->kondisi);
            $sheet->setCellValue('I' . $row, $asset->status);
            $sheet->setCellValue('J' . $row, $asset->pelabuhan);
            $row++;
        }

        // Stream the Excel file directly to the browser
        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output'); // Stream directly to output
        });

        // Set headers to prompt file download
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="assets_export.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
