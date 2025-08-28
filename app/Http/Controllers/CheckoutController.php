<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function createSubscription(Request $request)
    {
        $planId = 'ID_DO_PLANO_CRIADO_ANTERIORMENTE'; // Ex: P-123456789

        $url = env('MERCADOPAGO_BASE_URL') . '/preapproval';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MERCADOPAGO_ACCESS_TOKEN'),
            'Content-Type' => 'application/json',
        ])->post($url, [
            'preapproval_plan_id' => $planId,
            'payer_email' => 'cliente@email.com', // E-mail do usuário
            'card_token_id' => $request->card_token, // Token do cartão (gerado via Frontend)
            'back_url' => 'https://seusite.com/obrigado',
            'status' => 'authorized',
        ]);

        $subscription = $response->json();

        // Salve no banco:
        // $subscription['id'] (ID da assinatura)
        // $subscription['status'] (pending, authorized, active, etc.)

        return redirect($subscription['init_point']); // Redireciona para o pagamento
    }

    public function processPayment(Request $request)
    {
        // Dados do request (frontend)
        $cardToken = $request->card_token;
        $planId = $request->plan_id;

        // Cria a assinatura no Mercado Pago
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MERCADOPAGO_ACCESS_TOKEN'),
        ])->post('https://api.mercadopago.com/preapproval', [
            'preapproval_plan_id' => $planId,
            'payer_email' => $request->customer['email'],
            'card_token_id' => $cardToken,
            'back_url' => route('checkout.success'), // URL de sucesso pós-pagamento
        ]);

        // Retorna a URL do checkout Mercado Pago
        return response()->json([
            'redirect_url' => $response->json()['init_point'],
        ]);
    }
}
