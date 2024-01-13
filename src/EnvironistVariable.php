<?php
namespace Ssleert\Environist;

class EnvironistVariable {
  public function getEnvironmentVariable(string $name): string {
    switch (true) {
      case array_key_exists($name, $_ENV):
        return $_ENV[$name];
      case array_key_exists($name, $_SERVER):
        return $_SERVER[$name];
      default:
        return "";
    }
  }

  public function getString(string $name, string $defaultValue): string {
    $value = $this->getEnvironmentVariable($name);
    if ($value === "") {
      return $defaultValue;
    }
    return $value;
  }

  public function getInt(string $name, int $defaultValue): int {
    $value = $this->getEnvironmentVariable($name);
    if ($value === "") {
      return $defaultValue;
    }
    return (int)$value;
  }

  public function getFloat(string $name, float $defaultValue): float {
    $value = $this->getEnvironmentVariable($name);
    if ($value === "") {
      return $defaultValue;
    }
    return (float)$value;
  }

  public function getBool(string $name, bool $defaultValue): bool {
    $value = $this->getEnvironmentVariable($name);
    if ($value === "") {
      return $defaultValue;
    }
    return (bool)$value;
  }
}

