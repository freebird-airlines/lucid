<?php

namespace Lucid\Domains\Http\Jobs;

use Lucid\Units\Job;
use Illuminate\Routing\ResponseFactory;

class RespondWithJsonJob extends Job
{
    protected $status;
    protected $content;
    protected $helperData;
    protected $headers;
    protected $options;

    public function __construct($content, $helperData = [], $status = 200, array $headers = [], $options = 0)
    {
        $this->content = $content;
        $this->helperData = $helperData;
        $this->status = $status;
        $this->headers = $headers;
        $this->options = $options;
    }

    public function handle(ResponseFactory $factory)
    {
        $response = [
            'data' => $this->content,
            'status' => $this->status,
        ];

        if (! empty($this->helperData)) {
            $response['helper_data'] = $this->helperData;
        }


        return $factory->json($response, $this->status, $this->headers, $this->options);
    }
}
