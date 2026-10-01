<?php

namespace App\Jobs;

use App\Services\CsmExcelService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Throwable;

class SaveCsmResponse implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public array $backoff = [
        10,
        30,
        60,
        120,
    ];

    public function __construct(
        public array $data
    ) {
    }

    public function handle(CsmExcelService $excelService): void
    {
        $excelService->appendResponse($this->data);
    }

    public function failed(Throwable $exception): void
    {
        report($exception);
    }
}