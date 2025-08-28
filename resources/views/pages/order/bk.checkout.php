<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Assinatura</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        .card { border: 1px solid #ddd; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        button { background: #009EE3; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Finalizar Assinatura</h1>

    <!-- Plano Selecionado -->
    <div class="card">
        <h2>{{ $plan->title }}</h2>
        <p>Preço: R$ {{ number_format($plan->value, 2, ',', '.') }}/mês</p>
    </div>

    <!-- Formulário de Dados do Cliente -->
    <form method="POST" action="{{ route('checkout.processPayment') }}" id="paymentForm">
        @csrf

        <div class="card">
            <h3>Dados Pessoais</h3>
            <input type="text" id="customerName" placeholder="Nome Completo" required value="Camile">
            <input type="email" id="customerEmail" placeholder="E-mail" required value="camilevt80@gmail.com">
            <input type="text" id="customerDocument" placeholder="CPF (apenas números)" required value="518.267.888-93">
        </div>

        <!-- Dados do Cartão (via Mercado Pago Brick) -->
        <div class="card">
            <h3>Cartão de Crédito</h3>
            <div id="cardPaymentBrick_container"></div>
        </div>

        <button type="submit" id="submitButton">Assinar Agora</button>
    </form>

    <script>
        // Configuração do Mercado Pago
        const mp = new MercadoPago('{{ env("MERCADOPAGO_PUBLIC_KEY") }}', {
            locale: 'pt-BR'
        });

        // Renderiza o formulário de cartão
        const bricksBuilder = mp.bricks();
        let cardPaymentBrickController;

        async function loadBrick() {
            cardPaymentBrickController = await bricksBuilder.create('cardPayment', 'cardPaymentBrick_container', {
                initialization: {
                    amount: {{ $plan->price }}, // Valor do plano
                },
                callbacks: {
                    onReady: () => {
                        console.log('Cartão pronto para uso');
                    },
                    onSubmit: async ({ formData }) => {
                        // Envia os dados para o Laravel processar
                        const response = await fetch('/processar-pagamento', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                plan_id: '{{ $plan->id }}',
                                card_token: formData.cardToken,
                                customer: {
                                    name: document.getElementById('customerName').value,
                                    email: document.getElementById('customerEmail').value,
                                    document: document.getElementById('customerDocument').value,
                                }
                            }),
                        });

                        const data = await response.json();
                        if (data.redirect_url) {
                            window.location.href = data.redirect_url; // Redireciona para o Mercado Pago
                        }
                    },
                    onError: (error) => {
                        console.error('Erro no cartão:', error);
                    }
                }
            });
        }

        loadBrick();
    </script>
</body>
</html>
