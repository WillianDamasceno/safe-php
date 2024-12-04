<?php

namespace WillianDamasceno\SafePHP\Option;

use WillianDamasceno\SafePHP\Option;

class None extends Option
{
  public function isSome(): bool
  {
    return false;
  }

  public function isNone(): bool
  {
    return true;
  }

  public function unwrap(): never
  {
    throw new \RuntimeException("Attempt to call `unwrap()` on `None` value");
  }

  public function unwrapOr(mixed $or): mixed
  {
    return $or;
  }
}
