<?php

namespace Alexa\Request;

class SessionEndedRequest extends Request
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @param string $rawData
     */
    public function __construct($rawData)
    {
        parent::__construct($rawData);

        $this->reason = $this->data['request']['reason'];
    }
}
