<?php

namespace Modules\Quote\Http\Requests;

use Modules\Core\Http\Requests\BaseStoreRequest;
use Modules\Quote\Http\Requests\Rules\QuoteRules;

class QuoteStoreRequest extends BaseStoreRequest
{
    use QuoteRules;
}
