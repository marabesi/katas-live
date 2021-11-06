<?php

namespace App\Tests;

use App\Service\FibonacciRpcClient;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;

class CommunicationTest extends TestCase
{

    public function test_can_publish_a_message() {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'hello');

        $this->assertTrue(true);
    }

    public function test_send_rpc_call_to_the_queue() {
        $fibonacci_rpc = new FibonacciRpcClient();
        $response = $fibonacci_rpc->call(30);
        $this->assertEquals(832040, $response);
    }
}