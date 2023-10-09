<?php

// app/Http/Controllers/WebSocketController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebSocket\WebSocketServer;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class WebSocketController extends Controller
{
    public function startServer()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new WebSocketServer()
                )
            ),
            8080 // Ganti port sesuai keinginan Anda
        );

        $server->run();
    }
}
