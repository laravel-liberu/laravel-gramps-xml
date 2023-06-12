<?php

namespace Flowgistics\XML\Casts;

use Closure;

class PendingCast
{
    /**
     * Create a new PendingTransform.
     */
    public function __construct(private readonly Closure $resolve)
    {
    }

    /**
     * Transform and resolve using a transformer.
     *
     * @param $cast
     *
     * @return mixed
     */
    public function to(string $cast)
    {
        $resolve = $this->resolve;

        return $resolve($cast);
    }
}
