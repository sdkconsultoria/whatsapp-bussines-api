<?php

namespace Sdkconsultoria\WhatsappBussinessApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WebhookController extends Controller
{
    public function subscribe(Request $request)
    {
        if ($request->hub_verify_token === config('whatsapp.webhook_verification_token')) {
            return $request->hub_challenge;
        }

        abort('400');
    }

    public function webhook(Request $request)
    {
    }
}
