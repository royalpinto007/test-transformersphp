<?php

declare(strict_types=1);

namespace Codewithkyrian\Transformers;

use Codewithkyrian\Transformers\Utils\Image;
use Codewithkyrian\Transformers\Utils\ImageDriver;

class Transformers
{
    public static string $cacheDir = '.transformers-cache';

    public static string $libsDir = __DIR__ . '/../libs';

    public static string $remoteHost = 'https://huggingface.co';

    public static string $remotePathTemplate = '{model}/resolve/{revision}/{file}';

    public static ?string $authToken = null;

    public static ?string $userAgent = 'transformers-php/0.1.0';

    public static ImageDriver $imageDriver = ImageDriver::IMAGICK;

    public static function setup(): static
    {
        return new static;
    }

    public function apply(): void
    {
        Image::setDriver(self::$imageDriver);
    }

    /**
     * Set the default cache directory for transformers models and tokenizers
     * @param string $cacheDir
     * @return $this
     */
    public function setCacheDir(?string $cacheDir): static
    {
        if ($cacheDir != null) self::$cacheDir = $cacheDir;

        return $this;
    }

    /**
     * Set the default directory for shared libraries
     * @param string|null $libsDir
     * @return $this
     */
    public function setLibsDir(?string $libsDir): static
    {
        if ($libsDir != null) self::$libsDir = $libsDir;

        return $this;
    }

    /**
     * Set the remote host for downloading models and tokenizers. This is useful for using a custom mirror
     * or a local server for downloading models and tokenizers
     * @param string $remoteHost
     * @return $this
     */
    public function setRemoteHost(string $remoteHost): static
    {
        self::$remoteHost = $remoteHost;

        return $this;
    }

    /**
     * Set the remote path template for downloading models and tokenizers. This is useful for using a custom mirror
     * or a local server for downloading models and tokenizers
     * @param string $remotePathTemplate
     * @return $this
     */
    public function setRemotePathTemplate(string $remotePathTemplate): static
    {
        self::$remotePathTemplate = $remotePathTemplate;

        return $this;
    }

    /**
     * Set the authentication token for downloading models and tokenizers. This is useful for using a private model
     * repository in Hugging Face
     * @param string $authToken
     * @return $this
     */
    public function setAuthToken(string $authToken): static
    {
        self::$authToken = $authToken;

        return $this;
    }

    /**
     * Set the user agent for downloading models and tokenizers. This is useful for using a custom user agent
     * for downloading models and tokenizers
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent(string $userAgent): static
    {
        self::$userAgent = $userAgent;

        return $this;
    }

    public function setImageDriver(ImageDriver $imageDriver): static
    {
        self::$imageDriver = $imageDriver;

        return $this;
    }
}