<?php

namespace Sdkconsultoria\WhatsappBussinessApi\Tests\Feature\Http\Controllers;

use Sdkconsultoria\WhatsappBussinessApi\Tests\TestCase;

class WebhookControllerTest extends TestCase
{
    public function test_subscribe_webhook_with_valid_token()
    {
        $verificationToken = config('whatsapp.webhook_verification_token');
        $verificationMetaToken = rand(11111, 99999);
        $response = $this->get('whatsapp-webhook?hub_verify_token=' . $verificationToken . '&hub_challenge=' . $verificationMetaToken);

        $response->assertSeeText($verificationMetaToken);
        $response->assertStatus(200);
    }

    public function test_subscribe_webhook_invalid_token()
    {
        $verificationToken = rand(11111, 99999);
        $verificationMetaToken = rand(11111, 99999);
        $response = $this->get('whatsapp-webhook?hub_verify_token=' . $verificationToken . '&hub_challenge=' . $verificationMetaToken);

        $response->assertStatus(400);
    }
}
