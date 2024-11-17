<!doctypehtml><html><head><style>@import url(https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap);b,p{font-size:16px}.small{font-size:13px;display:block;margin:0;margin-left:15px}*{color:#545c69;font-family:Lato,sans-serif}</style></head><body><p>👋 Hi {{$user->first_name}},</p><p>Thank you for purchasing from {{ config('app.name') }}. We have ✅ successfully processed your payment for Invoice <b>#{{ $invoice->id }}</b>.</p><p><b>Transaction ID:</b> {{ $transactionId }}</p><b>Product:</b> @foreach($order->products as $product)<p class="small">{{ $product->quantity }}x {{ $product->product()->get()->first()->name }}</p>@endforeach<p><b>Total:</b> {{ config('settings::currency_sign') }}{{ number_format($amount / 100, 2) }}</p><p><a href="{{ route('clients.invoice.show', $invoice->id) }}">View Invoice ↗ </a></p><p>Regards,<br>{{ config('app.name') }}</p></body></html>