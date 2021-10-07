<?php

declare(strict_types=1);

namespace PHPStan\BetterReflection\Util;

/**
 * @internal
 */
final class PhpIdParser
{

    public static function fromVersion(string $version): int
    {
        $parts = array_map('intval', explode('.', $version));
        return $parts[0] * 10000 + $parts[1] * 100 + ($parts[2] ?? 0);
    }

}
