<?php

declare(strict_types=1);

namespace App\Contracts;

class ResponseTemplate
{
    public object $meta;
    public object | array $data;

    public function __construct()
    {
        $this->meta->code = 200;
        $this->meta->message = 'OK';
        $this->data = null;
    }

    public function setMeta(int $httpCode)
    {
        $httpStatusMessage = [
            200 => 'OK',
            201 => 'Created',
            204 => 'No Content',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            500 => 'Internal Server Error'
        ];

        $this->meta->code = $httpCode;
        $this->meta->message = $httpStatusMessage[$httpCode];
        return $this;
    }

    public function setData(object | array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function release(): object
    {
        return (object) [
            'meta' => $this->meta,
            'data' => $this->data
        ];
    }
}
