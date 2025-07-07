<?php
require_once("./connection/connection.php");
require_once("./controllers/UserController.php");

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['status' => 400, 'message' => 'Invalid JSON input']);
    exit;
}

$userController = new UserController($mysqli);

try {
    if ($input['action'] === 'login') {
        $result = $userController->login([
            'email' => $input['email'],
            'password' => $input['password']
        ]);
    } elseif ($input['action'] === 'register') {
        $result = $userController->register([
            'username' => $input['name'], 
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Invalid action']);
        exit;
    }
    
    echo $result;
} catch (Exception $e) {
    echo json_encode(['status' => 500, 'message' => 'Server error: ' . $e->getMessage()]);
}
?>