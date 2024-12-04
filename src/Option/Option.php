<?php

namespace WillianDamasceno\SafePHP;

/**
 * @template T
 */
abstract class Option
{
  abstract public function isSome(): bool;

  abstract public function isNone(): bool;

  abstract public function unwrap(): mixed;

  abstract public function unwrapOr(mixed $or): mixed;
}
