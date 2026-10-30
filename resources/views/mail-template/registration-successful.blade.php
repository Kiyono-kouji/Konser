<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Registration Successful - LANY</title>
</head>
<body style="margin: 0; padding: 0; background-color: #111114; color: #f0f0f2; font-family: Arial, Helvetica, sans-serif;">
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
        $maskedIdentity = strlen($registration->identity_number) > 4
            ? str_repeat('*', strlen($registration->identity_number) - 4) . substr($registration->identity_number, -4)
            : $registration->identity_number;
        $money = fn (int $amount): string => 'Rp ' . number_format($amount, 0, ',', '.');
    @endphp
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #111114; margin: 0; padding: 32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width: 620px; background-color: #18181c; border: 1px solid #2a2a30;">
                    <tr>
                        <td style="height: 5px; background-color: #e8c46a; font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="padding: 34px 40px 28px; border-bottom: 1px solid #2a2a30;">
                            <p style="margin: 0 0 10px; color: #e8c46a; font-size: 12px; font-weight: bold; letter-spacing: 3px; text-transform: uppercase;">
                                LANY / LIVE IN JAKARTA
                            </p>
                            <h1 style="margin: 0; color: #f0f0f2; font-size: 30px; line-height: 1.15; font-weight: 700;">
                                a beautiful blur:<br>
                                <span style="color: #e8c46a;">the world tour</span>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 38px 40px 12px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="48" valign="middle" style="width: 48px; padding: 0 14px 0 0;">
                                        <table role="presentation" width="42" height="42" cellpadding="0" cellspacing="0" border="0" style="width: 42px; height: 42px; border: 1px solid #4caf88; border-radius: 50%;">
                                            <tr>
                                                <td width="42" height="42" valign="middle" align="center" style="width: 42px; height: 42px; color: #4caf88; font-size: 24px; line-height: 42px; text-align: center;">&#10003;</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td valign="middle">
                                        <p style="margin: 0 0 6px; color: #4caf88; font-size: 12px; line-height: 16px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                                            Registration confirmed
                                        </p>
                                        <h2 style="margin: 0; color: #f0f0f2; font-size: 24px; line-height: 30px;">
                                            You’re on the list, {{ $user_name }}.
                                        </h2>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 18px 40px 26px;">
                            <p style="margin: 0; color: #9494a0; font-size: 15px; line-height: 1.7;">
                                Thank you for registering for LANY live in Jakarta. Your order details are below. Please keep this email for your records while your e-ticket is being prepared.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 40px 28px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #1e1e23; border: 1px solid #35353d;">
                                <tr>
                                    <td style="padding: 20px 22px 8px; color: #5a5a68; font-size: 11px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                                        Event details
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px 22px 20px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Date</td>
                                                <td align="right" style="padding: 7px 0; color: #f0f0f2; font-size: 14px; font-weight: bold;">14 November 2026</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Venue</td>
                                                <td align="right" style="padding: 7px 0; color: #f0f0f2; font-size: 14px; font-weight: bold;">Beach City International Stadium</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Location</td>
                                                <td align="right" style="padding: 7px 0; color: #f0f0f2; font-size: 14px; font-weight: bold;">Jakarta</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 40px 28px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #1e1e23; border: 1px solid #35353d;">
                                            <tr>
                                                <td style="padding: 20px 22px 8px; color: #5a5a68; font-size: 11px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                                                    Ticket order
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 22px 20px;">
                                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Ticket category</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px; font-weight: bold;">{{ $tierNames[$registration->ticket_tier] ?? strtoupper($registration->ticket_tier) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Quantity</td>
                                                            <td align="right" style="padding: 7px 0; color: #f0f0f2; font-size: 14px; font-weight: bold;">{{ $registration->ticket_quantity }} ticket(s)</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Price per ticket</td>
                                                            <td align="right" style="padding: 7px 0; color: #f0f0f2; font-size: 14px;">{{ $money($registration->ticket_price) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Payment method</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px; font-weight: bold;">{{ $paymentNames[$registration->payment_method] ?? strtoupper($registration->payment_method) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="padding: 12px 0 0; border-top: 1px solid #35353d; color: #9494a0; font-size: 14px;">Total amount</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="padding: 4px 0 0; color: #e8c46a; font-size: 22px; font-weight: bold;">{{ $money($registration->total) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="padding: 5px 0 0; color: #5a5a68; font-size: 12px;">Includes 10% tax and Rp 25.000 convenience fee</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 40px 28px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #1e1e23; border: 1px solid #35353d;">
                                            <tr>
                                                <td style="padding: 20px 22px 8px; color: #5a5a68; font-size: 11px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                                                    Buyer information
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 22px 20px;">
                                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Full name</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px; font-weight: bold;">{{ $registration->buyer_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Email</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px;">{{ $registration->buyer_email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Phone / WhatsApp</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px;">{{ $registration->buyer_phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">KTP / Passport</td>
                                                            <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px;">{{ $maskedIdentity }}</td>
                                                        </tr>
                                                        @if ($registration->buyer_city)
                                                            <tr>
                                                                <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">City</td>
                                                                <td align="right" style="padding: 7px 0 7px 16px; color: #f0f0f2; font-size: 14px;">{{ $registration->buyer_city }}</td>
                                                            </tr>
                                                        @endif
                                                        @if ($registration->promo_code)
                                                            <tr>
                                                                <td style="padding: 7px 0; color: #9494a0; font-size: 14px;">Promo code</td>
                                                                <td align="right" style="padding: 7px 0 7px 16px; color: #e8c46a; font-size: 14px; font-weight: bold;">{{ $registration->promo_code }}</td>
                                                            </tr>
                                                        @endif
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                @if ($registration->special_notes)
                                    <tr>
                                        <td style="padding: 0 40px 28px;">
                                            <p style="margin: 0; padding: 14px 16px; border-left: 3px solid #e8c46a; background-color: #1e1e23; color: #9494a0; font-size: 13px; line-height: 1.6;">
                                                <strong style="color: #f0f0f2;">Special request:</strong><br>
                                                {{ $registration->special_notes }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 40px 34px;">
                            <p style="margin: 0 0 16px; color: #9494a0; font-size: 14px; line-height: 1.7;">
                                Please keep this email for your records. If you did not make this registration, please contact the event team immediately.
                            </p>
                            <a href="{{ route('tickets') }}" style="display: inline-block; padding: 13px 20px; background-color: #e8c46a; color: #111114; font-size: 13px; font-weight: bold; text-decoration: none; letter-spacing: .3px;">
                                VIEW TICKET PAGE
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 40px; border-top: 1px solid #2a2a30;">
                            <p style="margin: 0; color: #5a5a68; font-size: 12px; line-height: 1.6;">
                                LANY — a beautiful blur: the world tour<br>
                                This is an automated message. Please do not reply.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>