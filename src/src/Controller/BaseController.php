<?php
// src/Controller/BaseController.php
namespace App\Controller;

class BaseController
{
    public function testMennage($parameter)
    {
        return 'Hello, ' . $parameter . '!';
    }

    public function baseURL()
    {
        phpinfo();
        exit();
        $serverSoftware = isset($_SERVER['SERVER_SOFTWARE']) ? ($_SERVER['SERVER_SOFTWARE']) : ('DESCONHECIDO');
        $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? ($_SERVER['REQUEST_METHOD']) : ('DESCONHECIDO');
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? ($_SERVER['REQUEST_SCHEME']) : ('http');
        $documentRoot = isset($_SERVER['DOCUMENT_ROOT']) ? ($_SERVER['DOCUMENT_ROOT']) : ('500');
        $serverAddr = isset($_SERVER['SERVER_ADDR']) ? ($_SERVER['SERVER_ADDR']) : ('127.0.0.1');
        $serverName = isset($_SERVER['SERVER_NAME']) ? ($_SERVER['SERVER_NAME']) : ('127.0.0.1');
        $status = isset($_SERVER['REDIRECT_STATUS']) ? ($_SERVER['REDIRECT_STATUS']) : ('500');
        $remotePort = isset($_SERVER['REMOTE_PORT']) ? ($_SERVER['REMOTE_PORT']) : ('80');
        $serverPort = isset($_SERVER['SERVER_PORT']) ? ($_SERVER['SERVER_PORT']) : ('80');
        $baseURLsy = $requestScheme . '://' . $serverName . ':' . $remotePort;
        defined('SERVER_SOFTWARE') or define('SERVER_SOFTWARE', $serverMethod);
        defined('REQUEST_METHOD') or define('REQUEST_METHOD', $requestMethod);
        defined('REQUEST_SCHEME') or define('REQUEST_SCHEME', $requestScheme);
        defined('DOCUMENT_ROOT') or define('DOCUMENT_ROOT', $documentRoot);
        defined('REDIRECT_STATUS') or define('REDIRECT_STATUS', $status);
        defined('REMOTE_PORT') or define('REMOTE_PORT', $remotePort);
        defined('SERVER_ADDR') or define('SERVER_ADDR', $serverAddr);
        defined('SERVER_NAME') or define('SERVER_NAME', $serverName);
        defined('SERVER_PORT') or define('SERVER_PORT', $serverPort);
        defined('BASE_URL_SY') or define('BASE_URL_SY', $baseURLsy);
        return [
            'serverSoftware' => SERVER_SOFTWARE,
            'requestMethod' => REQUEST_METHOD,
            'requestScheme' => REQUEST_SCHEME,
            'documentRoot' => DOCUMENT_ROOT,
            'remotePort' => REMOTE_PORT,
            'status' => REDIRECT_STATUS,
            'serverAddr' => SERVER_ADDR,
            'serverName' => SERVER_NAME,
            'serverPort' => SERVER_PORT,
            'baseURLsy' => BASE_URL_SY
        ];
    }
}

?>