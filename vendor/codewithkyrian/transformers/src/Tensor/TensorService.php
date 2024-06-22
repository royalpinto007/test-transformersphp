<?php

declare(strict_types=1);

namespace Codewithkyrian\Transformers\Tensor;

use Codewithkyrian\Transformers\Transformers;
use Codewithkyrian\TransformersLibrariesDownloader\Libraries;
use Rindow\Math\Matrix\Drivers\AbstractMatlibService;
use Rindow\Matlib\FFI\MatlibFactory;

class TensorService extends AbstractMatlibService
{
    protected function injectDefaultFactories(): void
    {
        $bufferFactory = new TensorBufferFactory();

        // Try initializing OpenMP-compatible factories
        $openblasFactory = new OpenBLASFactory(
            headerFile: Libraries::OpenBlas_OpenMP->headerFile(Transformers::$libsDir),
            libFiles: [Libraries::OpenBlas_OpenMP->libFile(Transformers::$libsDir)],
        );

        $mathFactory = new MatlibFactory(
            libFiles: [Libraries::RindowMatlib_OpenMP->libFile(Transformers::$libsDir)]
        );

        // Check if OpenMP-compatible factories are available
        if ($openblasFactory->isAvailable() && $mathFactory->isAvailable()) {
            $this->openblasFactory = $openblasFactory;
            $this->mathFactory = $mathFactory;
            $this->bufferFactory = $bufferFactory;

            return;
        }

        // If OpenMP is not available, try initializing serial-compatible factories
        $openblasFactory = new OpenBLASFactory(
            headerFile: Libraries::OpenBlas_Serial->headerFile(Transformers::$libsDir),
            libFiles: [Libraries::OpenBlas_Serial->libFile(Transformers::$libsDir)],
        );

        $mathFactory = new MatlibFactory(
            libFiles: [Libraries::RindowMatlib_Serial->libFile(Transformers::$libsDir)]
        );

        // Check if serial-compatible factories are available
        if ($openblasFactory->isAvailable() && $mathFactory->isAvailable()) {
            $this->openblasFactory = $openblasFactory;
            $this->mathFactory = $mathFactory;
            $this->bufferFactory = $bufferFactory;
        }
    }
}