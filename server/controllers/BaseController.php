<?php

class BaseController {
    public function success_response($data) {
        return json_encode([
            "status" => 200,
            "data" => $data,
            "message" => "Request was successful"
        ]);
    }

    public function error_response($message) {
        return json_encode([
            "status" => 400,
            "message" => $message
        ]);
    }
}
