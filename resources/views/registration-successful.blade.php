<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Registration Successful - LANY</title>
    <style>
        :root {
            --bg: #111114;
            --surface: #18181c;
            --surface-2: #1e1e23;
            --border: #2a2a30;
            --border-light: #35353d;
            --text: #f0f0f2;
            --muted: #9494a0;
            --dim: #5a5a68;
            --accent: #e8c46a;
            --success: #4caf88;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-width: 320px;
            background: var(--bg);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        .page {
            min-height: 100vh;
            padding: 32px 20px;
        }

        .shell {
            width: min(100%, 680px);
            margin: 0 auto;
            overflow: hidden;
            background: var(--surface);
            border: 1px solid var(--border);
        }

        .accent-bar {
            height: 5px;
            background: var(--accent);
        }

        .header {
            padding: 34px 42px 28px;
            border-bottom: 1px solid var(--border);
        }

        .eyebrow {
            margin: 0 0 12px;
            color: var(--accent);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        h1, h2, p { margin-top: 0; }

        h1 {
            margin-bottom: 0;
            font-size: clamp(28px, 5vw, 38px);
            line-height: 1.12;
        }

        h1 span { color: var(--accent); }

        .content { padding: 42px; }

        .status {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 22px;
        }

        .check {
            display: grid;
            flex: 0 0 52px;
            width: 52px;
            height: 52px;
            place-items: center;
            border: 1px solid var(--success);
            border-radius: 50%;
            color: var(--success);
            font-size: 29px;
            line-height: 1;
        }

        .status-label {
            margin: 0 0 5px;
            color: var(--success);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.6px;
            text-transform: uppercase;
        }

        .status h2 {
            margin: 0;
            font-size: clamp(22px, 4vw, 28px);
            line-height: 1.2;
        }

        .intro {
            margin-bottom: 28px;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.75;
        }

        .notice {
            display: flex;
            gap: 12px;
            margin-bottom: 28px;
            padding: 16px 18px;
            background: rgba(76, 175, 136, .08);
            border: 1px solid rgba(76, 175, 136, .3);
            color: var(--text);
            font-size: 14px;
            line-height: 1.6;
        }

        .notice strong { color: var(--success); }

        .card {
            margin-bottom: 18px;
            padding: 22px;
            background: var(--surface-2);
            border: 1px solid var(--border-light);
        }

        .card-title {
            margin: 0 0 16px;
            color: var(--dim);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 12px 20px;
            margin: 0;
            font-size: 14px;
        }

        .details dt { color: var(--muted); }
        .details dd {
            max-width: 360px;
            margin: 0;
            color: var(--text);
            font-weight: 700;
            text-align: right;
        }

        .total {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px solid var(--border-light);
            color: var(--muted);
            font-size: 14px;
        }

        .total strong {
            color: var(--accent);
            font-size: 22px;
        }

        .actions {
            display: flex;
            justify-content: center;
            padding-top: 10px;
        }

        .button {
            display: inline-block;
            padding: 15px 24px;
            background: var(--accent);
            color: var(--bg);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .4px;
            text-decoration: none;
            transition: opacity .2s ease;
        }

        .button:hover { opacity: .88; }

        .footer {
            padding: 20px 42px;
            border-top: 1px solid var(--border);
            color: var(--dim);
            font-size: 12px;
            line-height: 1.6;
        }

        @media (max-width: 560px) {
            .page { padding: 16px 10px; }
            .header, .content { padding: 28px 22px; }
            .footer { padding: 18px 22px; }
            .details { grid-template-columns: 1fr; gap: 5px; }
            .details dd { max-width: none; text-align: left; }
            .total { align-items: flex-start; flex-direction: column; gap: 4px; }
            .button { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>
    @php
        $tierNames = [
            'vip' => 'VIP — Blur Lounge Package',
            'ga' => 'Festival Ground — Free Standing',
            'cat1' => 'Tribune CAT 1 — Lower Bowl Seated',
            'cat2' => 'Tribune CAT 2 — Upper Bowl Seated',
        ];
        $paymentNames = [
            'bca_va' => 'BCA Virtual Account',
            'mandiri_va' => 'Mandiri Virtual Account',
            'qris' => 'QRIS / E-Wallet',
            'credit_card' => 'Credit / Debit Card',
        ];
        $money = fn (int $amount): string => 'Rp ' . number_format($amount, 0, ',', '.');
    @endphp

    <main class="page">
        <section class="shell">
            <div class="accent-bar"></div>
            <header class="header">
                <p class="eyebrow">LANY / Live in Jakarta</p>
                <h1>a beautiful blur:<br><span>the world tour</span></h1>
            </header>

            <div class="content">
                <div class="status">
                    <div class="check" aria-hidden="true">&#10003;</div>
                    <div>
                        <p class="status-label">Registration successful</p>
                        <h2>You're on the list, {{ $registration->buyer_name }}.</h2>
                    </div>
                </div>

                <p class="intro">
                    Your ticket registration has been saved successfully. Please review your order summary below.
                </p>

                <div class="notice">
                    <span aria-hidden="true">&#9993;</span>
                    <div>
                        <strong>Confirmation email sent</strong><br>
                        We've sent your registration details to <strong>{{ $registration->buyer_email }}</strong>.
                        Please check your inbox or spam folder.
                    </div>
                </div>

                <div class="card">
                    <p class="card-title">Event details</p>
                    <dl class="details">
                        <dt>Date</dt><dd>14 November 2026</dd>
                        <dt>Venue</dt><dd>Beach City International Stadium</dd>
                        <dt>Location</dt><dd>Jakarta</dd>
                    </dl>
                </div>

                <div class="card">
                    <p class="card-title">Your order</p>
                    <dl class="details">
                        <dt>Ticket category</dt>
                        <dd>{{ $tierNames[$registration->ticket_tier] ?? strtoupper($registration->ticket_tier) }}</dd>
                        <dt>Quantity</dt><dd>{{ $registration->ticket_quantity }} ticket(s)</dd>
                        <dt>Price per ticket</dt><dd>{{ $money($registration->ticket_price) }}</dd>
                        <dt>Payment method</dt>
                        <dd>{{ $paymentNames[$registration->payment_method] ?? strtoupper($registration->payment_method) }}</dd>
                    </dl>
                    <div class="total">
                        <span>Total amount</span>
                        <strong>{{ $money($registration->total) }}</strong>
                    </div>
                </div>

                <div class="actions">
                    <a class="button" href="{{ route('tickets') }}">BACK TO TICKET PAGE</a>
                </div>
            </div>

            <footer class="footer">
                Keep this page and your confirmation email for your records.<br>
                LANY — a beautiful blur: the world tour
            </footer>
        </section>
    </main>
</body>
</html>
