<?php

declare(strict_types=1);


namespace Codewithkyrian\Transformers\Decoders;

class FuseDecoder extends Decoder
{

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    protected function decodeChain(array $tokens): array
    {
        return [implode('', $tokens)];
    }
}