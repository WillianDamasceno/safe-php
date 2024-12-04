<?php

namespace WillianDamasceno\SafePHP\Option;

use WillianDamasceno\SafePHP\Option;

/**
 * @template T
 *
 * @implements \Option<T>
 */
class Some extends Option
{
  public function __construct(
    /** @var T */
    protected mixed $value
  ) {
  }

  public function isSome(): bool
  {
    return true;
  }

  public function isNone(): bool
  {
    return false;
  }

  /**
   * @return T
   */
  public function unwrap(): mixed
  {
    return $this->value;
  }

  /**
   * @return T
   */
  public function unwrapOr(mixed $or): mixed
  {
    return $this->unwrap();
  }
}
