<?php

namespace Lucid\Units;

use Lucid\Bus\ServesFeatures;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Base controller.
 */
class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;
    use ServesFeatures;
}
