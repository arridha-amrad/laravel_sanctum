<?php

namespace App\Traits;

trait HttpResponses
{
  protected function success($data, $message = null, $statusCode = 200)
  {
    return response()->json(
      [
        "data" => $data,
        "message" => $message,
        "status" => 'Request was successful'
      ],
      $statusCode
    );
  }

  protected function error($data, $message = null, $statusCode = 400)
  {
    return response()->json(
      [
        "data" => $data,
        "message" => $message,
        "status" => 'Error has occurred'
      ],
      $statusCode
    );
  }
}
