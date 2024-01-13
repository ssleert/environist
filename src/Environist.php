<?php
namespace Ssleert\Environist;

use Ssleert\Environist\EnvironistVariable;

class Environist {
  private static EnvironistVariable $instance;

  private static function getInstance(): EnvironistVariable {
    self::$instance = self::$instance ?? new EnvironistVariable();
    return self::$instance;
  }

  public static function getString(string $name, string $defaultValue): string {
    return self::getInstance()->getString($name, $defaultValue);
  }

  public static function getInt(string $name, int $defaultValue): int {
    return self::getInstance()->getInt($name, $defaultValue);
  }

  public static function getFloat(string $name, float $defaultValue): float {
    return self::getInstance()->getFloat($name, $defaultValue);
  }

  public static function getBool(string $name, bool $defaultValue): bool {
    return self::getInstance()->getBool($name, $defaultValue);
  }
}
