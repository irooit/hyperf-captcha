<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Irooit\Captcha;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for Irooit/hyperf-captcha.',
                    'source' => __DIR__ . '/../publish/hi_captcha.php',
                    'destination' => BASE_PATH . '/config/autoload/hi_captcha.php',
                ],
            ]
        ];
    }
}
