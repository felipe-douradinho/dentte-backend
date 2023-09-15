<?php

namespace Modules\Quote\Http\Requests;

use Modules\Core\Http\Requests\BaseUpdateRequest;
use Modules\Quote\Http\Requests\Rules\QuoteRules;

class QuoteUpdateRequest extends BaseUpdateRequest
{
    use QuoteRules;
}
