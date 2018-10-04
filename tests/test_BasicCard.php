<?php
/**
 * Tests for Webhook Class
 */
use PHPUnit\Framework\TestCase;
require(dirname(__FILE__) . '/WebhookTestBase.php');
require_once(dirname(__FILE__) . '/../src/responses/BasicCard.php');


/**
 * Test Class for Webhook Object
 */
class BasicCardTest extends WebhookTestBase {

    public function test_argsAddedToClass() {
        $args = [
            'title' => "Hello World",
            'subtitle' => "It's great to be here",
        ];
        $card = new BasicCard($args);
        $this->assertEquals($card->subtitle, $args['subtitle']);
    }

    public function test_weirdArgsNotAddedToClass() {
        $args = [
            'horses' => 'are fun',
        ];
        $card = new BasicCard($args);
        $this->assertFalse(property_exists($card, 'horses'));
    }

}