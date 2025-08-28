<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MercadoPagoController extends Controller
{
    public function createPlan()
    {
        $url = env('MERCADOPAGO_BASE_URL') . '/preapproval_plan';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MERCADOPAGO_ACCESS_TOKEN'),
            'Content-Type' => 'application/json',
        ])->post($url, [
            'back_url' => 'https://sitemas.test/obrigado',
            'reason' => 'Plano Básico (R$ 59,90/mês)',
            'auto_recurring' => [
                'frequency' => 1, // 1 = mensal
                'frequency_type' => 'months',
                'repetitions' => null, // null = sem fim
                'billing_day' => 10, // Dia da cobrança
                'transaction_amount' => 59.90,
                'currency_id' => 'BRL',
            ],
            'payment_methods_allowed' => [
                'payment_types' => [['id' => 'credit_card']],
            ],
        ]);

        $plan = $response->json();
        $planId = $plan['id']; // Salve este ID no banco de dados

        return $planId;
    }

    public function webhook(Request $request)
    {
        $paymentId = $request->input('data.id');
        $url = env('MERCADOPAGO_BASE_URL') . '/v1/payments/' . $paymentId;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MERCADOPAGO_ACCESS_TOKEN'),
        ])->get($url);

        $payment = $response->json();

        // Atualize o status no banco de dados:
        if ($payment['status'] === 'approved') {
            // Assinatura ativa
        } elseif ($payment['status'] === 'cancelled') {
            // Assinatura cancelada
        }

        return response()->json(['status' => 'success']);
    }

    public function cancelSubscription($subscriptionId)
    {
        $url = env('MERCADOPAGO_BASE_URL') . '/preapproval/' . $subscriptionId;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MERCADOPAGO_ACCESS_TOKEN'),
        ])->put($url, [
            'status' => 'cancelled',
        ]);

        return $response->json();
    }
}
