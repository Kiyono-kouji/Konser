<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Purchase official tickets for LANY live in Jakarta — a beautiful blur: the world tour, November 14 2026 at Beach City International Stadium.">
    <title>LANY — a beautiful blur: the world tour | Buy Tickets</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        /* ─── Reset ─────────────────────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        
        /* ─── Design Tokens ──────────────────────────────────────── */
        :root {
            --c-bg:          #111114;
            --c-surface:     #18181c;
            --c-surface-2:   #1e1e23;
            --c-border:      #2a2a30;
            --c-border-2:    #35353d;
            --c-text:        #f0f0f2;
            --c-text-2:      #9494a0;
            --c-text-3:      #5a5a68;
            --c-accent:      #e8c46a;
            --c-accent-dim:  rgba(232, 196, 106, 0.12);
            --c-accent-muted:rgba(232, 196, 106, 0.06);
            --c-error:       #e05252;
            --c-success:     #4caf88;

            --radius-sm: 6px;
            --radius-md: 10px;
            --radius-lg: 14px;

            --font-sans:    'Inter', system-ui, sans-serif;
            --font-display: 'Playfair Display', Georgia, serif;
        }

        /* ─── Base ────────────────────────────────────────────────── */
        html { font-size: 16px; -webkit-font-smoothing: antialiased; }

        body {
            font-family: var(--font-sans);
            background: var(--c-bg);
            color: var(--c-text);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* ─── Layout Helpers ─────────────────────────────────────── */
        .wrapper {
            max-width: 1160px;
            margin-inline: auto;
            padding-inline: 24px;
        }

        .divider {
            height: 1px;
            background: var(--c-border);
        }

        /* ─── Typography ─────────────────────────────────────────── */
        .label-overline {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--c-text-3);
        }

        /* ─── Topbar ─────────────────────────────────────────────── */
        .topbar {
            height: 52px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid var(--c-border);
        }

        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
        }

        .brand-wordmark {
            font-family: var(--font-sans);
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 4px;
            color: var(--c-text);
        }

        .brand-sep {
            width: 1px;
            height: 16px;
            background: var(--c-border-2);
        }

        .brand-context {
            font-size: 12px;
            color: var(--c-text-2);
            font-weight: 400;
        }

        .topbar-chip {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 500;
            color: var(--c-accent);
            background: var(--c-accent-muted);
            border: 1px solid rgba(232, 196, 106, 0.2);
            padding: 4px 12px;
            border-radius: 999px;
        }

        .topbar-chip .dot {
            width: 6px;
            height: 6px;
            background: var(--c-accent);
            border-radius: 50%;
            animation: blink 2s ease infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        /* ─── Event Header Band ──────────────────────────────────── */
        .event-band {
            background: var(--c-surface);
            border-bottom: 1px solid var(--c-border);
            padding: 40px 0;
        }

        .event-band-inner {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 32px;
            flex-wrap: wrap;
        }

        .event-artist {
            font-family: var(--font-display);
            font-size: clamp(36px, 5vw, 58px);
            font-weight: 700;
            line-height: 1;
            color: var(--c-text);
            letter-spacing: -1px;
        }

        .event-tour-name {
            font-family: var(--font-display);
            font-style: italic;
            font-size: clamp(15px, 2vw, 18px);
            color: var(--c-text-2);
            font-weight: 400;
            margin-top: 6px;
        }

        .event-tour-name em {
            color: var(--c-accent);
            font-style: normal;
        }

        .event-meta-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }

        .event-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: 999px;
            padding: 6px 14px;
            font-size: 13px;
            color: var(--c-text-2);
            font-weight: 500;
        }

        .event-pill svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0;
            stroke: var(--c-text-3);
        }

        .event-trust-badges {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 8px;
            flex-shrink: 0;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: var(--c-text-3);
        }

        .trust-item svg {
            width: 14px;
            height: 14px;
            stroke: var(--c-success);
            flex-shrink: 0;
        }

        /* ─── Main Content Grid ──────────────────────────────────── */
        .main-grid {
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 32px;
            padding-block: 36px;
            align-items: start;
        }

        /* ─── Section Heading ────────────────────────────────────── */
        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .section-step-num {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border-2);
            font-size: 11px;
            font-weight: 700;
            color: var(--c-text-2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .section-step-num.active {
            background: var(--c-accent);
            border-color: var(--c-accent);
            color: #111;
        }

        .section-heading-text {
            font-size: 14px;
            font-weight: 600;
            color: var(--c-text);
        }

        .section-heading-desc {
            margin-left: auto;
            font-size: 12px;
            color: var(--c-text-3);
        }

        /* ─── Form Block (step container) ───────────────────────── */
        .form-block {
            background: var(--c-surface);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-lg);
            margin-bottom: 16px;
            overflow: hidden;
        }

        .form-block-head {
            padding: 18px 22px;
            border-bottom: 1px solid var(--c-border);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-block-body {
            padding: 22px;
        }

        /* ─── Ticket Tier Cards ──────────────────────────────────── */
        .tier-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .tier-item {
            display: grid;
            grid-template-columns: 20px 1fr auto;
            align-items: center;
            gap: 16px;
            padding: 16px 18px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: border-color 0.15s, background 0.15s;
            position: relative;
        }

        .tier-item:hover {
            border-color: var(--c-border-2);
        }

        .tier-item.selected {
            border-color: var(--c-accent);
            background: var(--c-accent-muted);
        }

        .tier-radio {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid var(--c-border-2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: border-color 0.15s;
        }

        .tier-item.selected .tier-radio {
            border-color: var(--c-accent);
        }

        .tier-radio-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--c-accent);
            opacity: 0;
            transition: opacity 0.15s;
        }

        .tier-item.selected .tier-radio-dot {
            opacity: 1;
        }

        .tier-info {}

        .tier-name-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 3px;
        }

        .tier-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--c-text);
        }

        .tier-badge {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 2px 7px;
            border-radius: 4px;
            text-transform: uppercase;
        }

        .tier-badge.gold {
            background: rgba(232, 196, 106, 0.15);
            color: var(--c-accent);
            border: 1px solid rgba(232, 196, 106, 0.3);
        }

        .tier-badge.default {
            background: var(--c-surface);
            color: var(--c-text-3);
            border: 1px solid var(--c-border);
        }

        .tier-desc {
            font-size: 12px;
            color: var(--c-text-2);
        }

        .tier-price-col {
            text-align: right;
            flex-shrink: 0;
        }

        .tier-price-main {
            font-size: 15px;
            font-weight: 700;
            color: var(--c-text);
            white-space: nowrap;
        }

        .tier-price-label {
            font-size: 11px;
            color: var(--c-text-3);
            white-space: nowrap;
        }

        /* ─── Quantity Row ───────────────────────────────────────── */
        .qty-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 18px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            margin-top: 12px;
        }

        .qty-label {
            font-size: 14px;
            font-weight: 500;
            color: var(--c-text);
        }

        .qty-sublabel {
            font-size: 11px;
            color: var(--c-text-3);
        }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 0;
            border: 1px solid var(--c-border-2);
            border-radius: var(--radius-sm);
            overflow: hidden;
        }

        .qty-btn {
            width: 36px;
            height: 36px;
            background: var(--c-surface);
            border: none;
            color: var(--c-text-2);
            font-size: 18px;
            line-height: 1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.15s, color 0.15s;
        }

        .qty-btn:hover:not(:disabled) {
            background: var(--c-surface-2);
            color: var(--c-text);
        }

        .qty-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .qty-sep {
            width: 1px;
            height: 36px;
            background: var(--c-border-2);
        }

        .qty-display {
            width: 44px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: var(--c-text);
            background: var(--c-surface);
        }

        /* ─── Form Fields ────────────────────────────────────────── */
        .field-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .field-grid .field-full { grid-column: 1 / -1; }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .field-label {
            font-size: 12.5px;
            font-weight: 500;
            color: var(--c-text-2);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .field-required {
            color: var(--c-accent);
        }

        .field-tag {
            font-size: 10px;
            font-weight: 600;
            padding: 1px 6px;
            border-radius: 4px;
            background: rgba(76, 175, 136, 0.12);
            color: var(--c-success);
            border: 1px solid rgba(76, 175, 136, 0.25);
            letter-spacing: 0.3px;
        }

        .field-input,
        .field-select,
        .field-textarea {
            font-family: var(--font-sans);
            font-size: 14px;
            color: var(--c-text);
            background: var(--c-bg);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-sm);
            padding: 10px 13px;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
            width: 100%;
        }

        .field-input::placeholder,
        .field-textarea::placeholder {
            color: var(--c-text-3);
        }

        .field-input:focus,
        .field-select:focus,
        .field-textarea:focus {
            border-color: var(--c-accent);
            box-shadow: 0 0 0 3px var(--c-accent-dim);
        }

        .field-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%235a5a68' stroke-width='2.5'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 13px center;
            padding-right: 36px;
            cursor: pointer;
        }

        .field-select option { background: var(--c-surface); }

        .field-hint {
            font-size: 11.5px;
            color: var(--c-text-3);
        }

        /* ─── Payment Methods ────────────────────────────────────── */
        .payment-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: border-color 0.15s;
        }

        .payment-option:hover {
            border-color: var(--c-border-2);
        }

        .payment-option.selected {
            border-color: var(--c-accent);
            background: var(--c-accent-muted);
        }

        .payment-radio {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 2px solid var(--c-border-2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: border-color 0.15s;
        }

        .payment-option.selected .payment-radio {
            border-color: var(--c-accent);
        }

        .payment-radio-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--c-accent);
            opacity: 0;
            transition: opacity 0.15s;
        }

        .payment-option.selected .payment-radio-dot {
            opacity: 1;
        }

        .payment-info {}

        .payment-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--c-text);
        }

        .payment-detail {
            font-size: 11px;
            color: var(--c-text-3);
        }

        /* ─── Terms Checkbox ─────────────────────────────────────── */
        .terms-row {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            padding: 16px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            cursor: pointer;
        }

        .terms-check {
            width: 17px;
            height: 17px;
            border-radius: 4px;
            border: 1.5px solid var(--c-border-2);
            background: var(--c-bg);
            appearance: none;
            cursor: pointer;
            flex-shrink: 0;
            margin-top: 2px;
            display: grid;
            place-content: center;
            transition: all 0.15s;
        }

        .terms-check:checked {
            background: var(--c-accent);
            border-color: var(--c-accent);
        }

        .terms-check:checked::before {
            content: "";
            width: 9px;
            height: 6px;
            border-left: 2px solid #111;
            border-bottom: 2px solid #111;
            transform: rotate(-45deg) translateY(-1px);
            display: block;
        }

        .terms-text {
            font-size: 12.5px;
            color: var(--c-text-2);
            line-height: 1.5;
        }

        .terms-text a {
            color: var(--c-accent);
            text-decoration: underline;
            text-decoration-color: rgba(232, 196, 106, 0.4);
        }

        /* ─── Submit Button ──────────────────────────────────────── */
        .btn-submit {
            width: 100%;
            background: var(--c-accent);
            border: none;
            border-radius: var(--radius-md);
            padding: 14px 24px;
            color: #111;
            font-family: var(--font-sans);
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.15s, transform 0.1s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-submit:hover { opacity: 0.9; }
        .btn-submit:active { transform: scale(0.99); }

        .btn-submit svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        /* ─── Sidebar ────────────────────────────────────────────── */
        .sidebar-sticky {
            position: sticky;
            top: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sidebar-card {
            background: var(--c-surface);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-lg);
            overflow: hidden;
        }

        .sidebar-card-head {
            padding: 16px 20px;
            border-bottom: 1px solid var(--c-border);
        }

        .sidebar-card-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--c-text);
        }

        .sidebar-card-body {
            padding: 20px;
        }

        /* ─── Order Summary Table ────────────────────────────────── */
        .summary-rows {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid var(--c-border);
            font-size: 13px;
        }

        .summary-row:last-child {
            border-bottom: none;
        }

        .summary-row .label { color: var(--c-text-2); }
        .summary-row .value { color: var(--c-text); font-weight: 500; }

        .summary-total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0 0;
            margin-top: 4px;
        }

        .summary-total-label {
            font-size: 14px;
            font-weight: 600;
            color: var(--c-text);
        }

        .summary-total-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--c-accent);
        }

        /* ─── E-Ticket Preview ───────────────────────────────────── */
        .ticket-preview {
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-lg);
            overflow: hidden;
        }

        .ticket-head {
            padding: 16px 18px;
            background: linear-gradient(135deg, #1a1a20 0%, #1e1b28 100%);
            border-bottom: 1px dashed var(--c-border-2);
        }

        .ticket-head-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2px;
        }

        .ticket-artist-name {
            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 700;
            color: var(--c-text);
            letter-spacing: -0.3px;
        }

        .ticket-verified-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 10px;
            font-weight: 600;
            color: var(--c-success);
            background: rgba(76, 175, 136, 0.1);
            border: 1px solid rgba(76, 175, 136, 0.2);
            padding: 3px 8px;
            border-radius: 999px;
        }

        .ticket-tour {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 13px;
            color: var(--c-text-2);
            font-weight: 400;
        }

        .ticket-body {
            padding: 16px 18px;
        }

        .ticket-fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 16px;
        }

        .ticket-field-label {
            font-size: 9.5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--c-text-3);
            margin-bottom: 3px;
        }

        .ticket-field-val {
            font-size: 13px;
            font-weight: 600;
            color: var(--c-text);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .ticket-barcode-area {
            border-top: 1px dashed var(--c-border-2);
            padding-top: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .ticket-barcode {
            width: 100%;
            height: 44px;
            border-radius: 4px;
            background: repeating-linear-gradient(
                to right,
                var(--c-text-2) 0px, var(--c-text-2) 2px,
                transparent 2px, transparent 4px,
                var(--c-text-2) 4px, var(--c-text-2) 7px,
                transparent 7px, transparent 9px,
                var(--c-text-2) 9px, var(--c-text-2) 10px,
                transparent 10px, transparent 13px,
                var(--c-text-2) 13px, var(--c-text-2) 16px,
                transparent 16px, transparent 18px,
                var(--c-text-2) 18px, var(--c-text-2) 20px,
                transparent 20px, transparent 24px
            );
            opacity: 0.5;
        }

        .ticket-serial {
            font-size: 10px;
            color: var(--c-text-3);
            letter-spacing: 2px;
            font-family: 'Courier New', monospace;
        }

        /* ─── Info Banner ────────────────────────────────────────── */
        .info-banner {
            display: flex;
            gap: 12px;
            padding: 14px 16px;
            background: var(--c-surface-2);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            font-size: 12.5px;
            color: var(--c-text-2);
            line-height: 1.5;
        }

        .info-banner svg {
            width: 16px;
            height: 16px;
            stroke: var(--c-text-3);
            flex-shrink: 0;
            margin-top: 2px;
        }

        /* ─── Seating Map Toggle ─────────────────────────────────── */
        .map-toggle-btn {
            width: 100%;
            background: none;
            border: none;
            font-family: var(--font-sans);
            padding: 0;
            cursor: pointer;
        }

        .map-toggle-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-top: 1px solid var(--c-border);
            font-size: 12.5px;
            color: var(--c-text-2);
            font-weight: 500;
            transition: color 0.15s;
        }

        .map-toggle-btn:hover .map-toggle-inner {
            color: var(--c-text);
        }

        .map-toggle-arrow {
            font-size: 10px;
            transition: transform 0.2s;
        }

        .map-toggle-arrow.open {
            transform: rotate(180deg);
        }

        .map-diagram {
            display: none;
            padding: 16px;
            background: var(--c-bg);
            border-top: 1px solid var(--c-border);
        }

        .map-diagram.open { display: block; }

        .stage-label {
            text-align: center;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--c-text-3);
            text-transform: uppercase;
            border: 1px solid var(--c-border-2);
            border-radius: var(--radius-sm);
            padding: 8px;
            margin-bottom: 10px;
        }

        .map-zone {
            text-align: center;
            border-radius: var(--radius-sm);
            padding: 10px;
            margin-bottom: 8px;
            font-size: 11px;
            font-weight: 600;
            color: var(--c-text-2);
            border: 1px solid var(--c-border);
            background: var(--c-surface);
        }

        .map-zone.highlight {
            background: var(--c-accent-muted);
            border-color: rgba(232, 196, 106, 0.3);
            color: var(--c-accent);
        }

        .map-zone-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-bottom: 8px;
        }

        /* ─── Footer ─────────────────────────────────────────────── */
        footer {
            border-top: 1px solid var(--c-border);
            padding: 28px 0;
        }

        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .footer-copy {
            font-size: 12px;
            color: var(--c-text-3);
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            font-size: 12px;
            color: var(--c-text-3);
            text-decoration: none;
            transition: color 0.15s;
        }

        .footer-links a:hover { color: var(--c-text-2); }

        /* ─── Responsive ─────────────────────────────────────────── */
        @media (max-width: 900px) {
            .main-grid {
                grid-template-columns: 1fr;
            }
            .sidebar-sticky { position: static; }
            .event-trust-badges { display: none; }
        }

        @media (max-width: 560px) {
            .field-grid { grid-template-columns: 1fr; }
            .field-grid .field-full { grid-column: 1; }
            .payment-grid { grid-template-columns: 1fr; }
            .event-band-inner { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>

<!-- ─── Top Navigation ──────────────────────────────────────────── -->
<nav class="topbar">
    <div class="wrapper topbar-inner">
        <a href="/" class="topbar-brand">
            <span class="brand-wordmark">LANY</span>
            <span class="brand-sep"></span>
            <span class="brand-context">Official Ticket Purchase Here</span>
        </a>
        <div class="topbar-chip">
            <span class="dot"></span>
            On sale now
        </div>
    </div>
</nav>

<!-- ─── Event Header ────────────────────────────────────────────── -->
<section class="event-band">
    <div class="wrapper">
        <div class="event-band-inner">
            <div>
                <div class="label-overline" style="margin-bottom: 10px;">PK Entertainment & TEM Present</div>
                <h1 class="event-artist">LANY</h1>
                <p class="event-tour-name"><em>a beautiful blur:</em> the world tour</p>
                <div class="event-meta-pills">
                    <span class="event-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Sunday, 14 November 2026
                    </span>
                    <span class="event-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Doors 18:00 &mdash; Show 20:00 WIB
                    </span>
                    <span class="event-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        Beach City International Stadium, Jakarta
                    </span>
                </div>
            </div>
            <div class="event-trust-badges">
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Instant e-ticket delivery
                </div>
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Secure & encrypted checkout
                </div>
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Official authorised seller
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── Main ────────────────────────────────────────────────────── -->
<main>
    <div class="wrapper">
        <div class="main-grid">

            <!-- Left: Order Form -->
            <div>
                @if ($errors->any())
                    <div class="info-banner" role="alert" style="margin-bottom: 12px;">
                        <ul style="margin: 0; padding-left: 18px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="ticketForm" action="{{ route('ticket.send') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ticket_tier"     id="hiddenTier"     value="vip">
                    <input type="hidden" name="ticket_price"    id="hiddenPrice"    value="2850000">
                    <input type="hidden" name="ticket_quantity" id="hiddenQty"      value="1">
                    <input type="hidden" name="payment_method"  id="hiddenPayment"  value="bca_va">

                    <!-- ── Step 1: Ticket Category ──────────────────── -->
                    <div class="form-block">
                        <div class="form-block-head">
                            <span class="section-step-num active">1</span>
                            <span class="section-heading-text">Select Ticket Category</span>
                            <span class="section-heading-desc">Prices exclude 10% tax</span>
                        </div>
                        <div class="form-block-body">
                            <div class="tier-list">

                                <div class="tier-item selected" id="tier-vip" onclick="chooseTier('vip', 2850000, 'VIP — Blur Lounge Package', 'Gate VIP-A • Soundcheck Access')">
                                    <div class="tier-radio"><div class="tier-radio-dot"></div></div>
                                    <div class="tier-info">
                                        <div class="tier-name-row">
                                            <span class="tier-name">VIP — Blur Lounge Package</span>
                                            <span class="tier-badge gold">VIP</span>
                                        </div>
                                        <div class="tier-desc">Front stage access, soundcheck party, exclusive laminate &amp; priority merch lane</div>
                                    </div>
                                    <div class="tier-price-col">
                                        <div class="tier-price-main">Rp 2.850.000</div>
                                        <div class="tier-price-label">per person</div>
                                    </div>
                                </div>

                                <div class="tier-item" id="tier-ga" onclick="chooseTier('ga', 1650000, 'Festival Ground — Free Standing', 'Gate GA-B • Festival Pit')">
                                    <div class="tier-radio"><div class="tier-radio-dot"></div></div>
                                    <div class="tier-info">
                                        <div class="tier-name-row">
                                            <span class="tier-name">Festival Ground — Free Standing</span>
                                            <span class="tier-badge default">GA</span>
                                        </div>
                                        <div class="tier-desc">General admission pit directly in front of the main stage catwalk</div>
                                    </div>
                                    <div class="tier-price-col">
                                        <div class="tier-price-main">Rp 1.650.000</div>
                                        <div class="tier-price-label">per person</div>
                                    </div>
                                </div>

                                <div class="tier-item" id="tier-cat1" onclick="chooseTier('cat1', 1250000, 'Tribune CAT 1 — Lower Bowl Seated', 'Gate T1 • Numbered Seat')">
                                    <div class="tier-radio"><div class="tier-radio-dot"></div></div>
                                    <div class="tier-info">
                                        <div class="tier-name-row">
                                            <span class="tier-name">Tribune CAT 1 — Lower Bowl Seated</span>
                                            <span class="tier-badge default">CAT 1</span>
                                        </div>
                                        <div class="tier-desc">Numbered seats with elevated, unobstructed view of the full stage</div>
                                    </div>
                                    <div class="tier-price-col">
                                        <div class="tier-price-main">Rp 1.250.000</div>
                                        <div class="tier-price-label">per person</div>
                                    </div>
                                </div>

                                <div class="tier-item" id="tier-cat2" onclick="chooseTier('cat2', 850000, 'Tribune CAT 2 — Upper Bowl Seated', 'Gate T2 • Numbered Seat')">
                                    <div class="tier-radio"><div class="tier-radio-dot"></div></div>
                                    <div class="tier-info">
                                        <div class="tier-name-row">
                                            <span class="tier-name">Tribune CAT 2 — Upper Bowl Seated</span>
                                            <span class="tier-badge default">CAT 2</span>
                                        </div>
                                        <div class="tier-desc">Upper arena seating — full arena atmosphere at the best-value price</div>
                                    </div>
                                    <div class="tier-price-col">
                                        <div class="tier-price-main">Rp 850.000</div>
                                        <div class="tier-price-label">per person</div>
                                    </div>
                                </div>

                            </div>

                            <!-- Quantity -->
                            <div class="qty-row">
                                <div>
                                    <div class="qty-label">Number of Tickets</div>
                                    <div class="qty-sublabel">Maximum 5 tickets per transaction (per national ID)</div>
                                </div>
                                <div class="qty-control">
                                    <button type="button" class="qty-btn" id="btnMinus" onclick="stepQty(-1)">−</button>
                                    <span class="qty-sep"></span>
                                    <div class="qty-display" id="qtyDisplay">1</div>
                                    <span class="qty-sep"></span>
                                    <button type="button" class="qty-btn" id="btnPlus" onclick="stepQty(1)">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ── Step 2: Buyer Details ─────────────────────── -->
                    <div class="form-block">
                        <div class="form-block-head">
                            <span class="section-step-num active">2</span>
                            <span class="section-heading-text">Buyer & E-Ticket Details</span>
                            <span class="section-heading-desc">Used for webmailer dispatch</span>
                        </div>
                        <div class="form-block-body">
                            <div class="field-grid">

                                <div class="field">
                                    <label class="field-label" for="buyer_name">
                                        Full Name (as on ID) <span class="field-required">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        class="field-input"
                                        id="buyer_name"
                                        name="buyer_name"
                                        placeholder="e.g. Kenjo Jonathan"
                                        required
                                        autocomplete="name"
                                        oninput="liveSync()"
                                    >
                                    <span class="field-hint">Must match your government-issued ID</span>
                                </div>

                                <div class="field">
                                    <label class="field-label" for="buyer_email">
                                        Email Address <span class="field-required">*</span>
                                        <span class="field-tag">Mailer Target</span>
                                    </label>
                                    <input
                                        type="email"
                                        class="field-input"
                                        id="buyer_email"
                                        name="buyer_email"
                                        placeholder="e.g. kenjo@email.com"
                                        required
                                        autocomplete="email"
                                        oninput="liveSync()"
                                    >
                                    <span class="field-hint">E-ticket PDF will be sent to this address</span>
                                </div>

                                <div class="field">
                                    <label class="field-label" for="buyer_phone">
                                        Phone / WhatsApp <span class="field-required">*</span>
                                    </label>
                                    <input
                                        type="tel"
                                        class="field-input"
                                        id="buyer_phone"
                                        name="buyer_phone"
                                        placeholder="+62 812-3456-7890"
                                        required
                                        autocomplete="tel"
                                    >
                                </div>

                                <div class="field">
                                    <label class="field-label" for="identity_number">
                                        KTP / Passport Number <span class="field-required">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        class="field-input"
                                        id="identity_number"
                                        name="identity_number"
                                        placeholder="e.g. 3171012345670001"
                                        required
                                    >
                                    <span class="field-hint">Required for wristband redemption at the gate</span>
                                </div>

                                <div class="field">
                                    <label class="field-label" for="buyer_city">City of Residence</label>
                                    <input
                                        type="text"
                                        class="field-input"
                                        id="buyer_city"
                                        name="buyer_city"
                                        placeholder="e.g. Jakarta Selatan"
                                        autocomplete="address-level2"
                                    >
                                </div>

                                <div class="field">
                                    <label class="field-label" for="promo_code">Promo / Referral Code</label>
                                    <input
                                        type="text"
                                        class="field-input"
                                        id="promo_code"
                                        name="promo_code"
                                        placeholder="e.g. LANYJAKARTA"
                                        style="text-transform: uppercase;"
                                    >
                                </div>

                                <div class="field field-full">
                                    <label class="field-label" for="special_notes">Accessibility / Special Requests</label>
                                    <textarea
                                        class="field-textarea"
                                        id="special_notes"
                                        name="special_notes"
                                        rows="2"
                                        placeholder="Wheelchair access, companion seating, or any notes for the event team..."
                                        style="resize: vertical;"
                                    ></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- ── Step 3: Payment ───────────────────────────── -->
                    <div class="form-block">
                        <div class="form-block-head">
                            <span class="section-step-num active">3</span>
                            <span class="section-heading-text">Payment Method</span>
                            <span class="section-heading-desc">Simulated — no real charge</span>
                        </div>
                        <div class="form-block-body">
                            <div class="payment-grid">

                                <div class="payment-option selected" id="pay-bca_va" onclick="choosePayment('bca_va')">
                                    <div class="payment-radio"><div class="payment-radio-dot"></div></div>
                                    <div class="payment-info">
                                        <div class="payment-name">BCA Virtual Account</div>
                                        <div class="payment-detail">Transfer via m-Banking or ATM</div>
                                    </div>
                                </div>

                                <div class="payment-option" id="pay-mandiri_va" onclick="choosePayment('mandiri_va')">
                                    <div class="payment-radio"><div class="payment-radio-dot"></div></div>
                                    <div class="payment-info">
                                        <div class="payment-name">Mandiri Virtual Account</div>
                                        <div class="payment-detail">Livin' by Mandiri / ATM</div>
                                    </div>
                                </div>

                                <div class="payment-option" id="pay-qris" onclick="choosePayment('qris')">
                                    <div class="payment-radio"><div class="payment-radio-dot"></div></div>
                                    <div class="payment-info">
                                        <div class="payment-name">QRIS</div>
                                        <div class="payment-detail">GoPay, OVO, ShopeePay, Dana</div>
                                    </div>
                                </div>

                                <div class="payment-option" id="pay-credit_card" onclick="choosePayment('credit_card')">
                                    <div class="payment-radio"><div class="payment-radio-dot"></div></div>
                                    <div class="payment-info">
                                        <div class="payment-name">Credit / Debit Card</div>
                                        <div class="payment-detail">Visa, Mastercard, JCB</div>
                                    </div>
                                </div>

                            </div>

                            <!-- Terms -->
                            <label class="terms-row" style="margin-top: 16px;">
                                <input type="checkbox" class="terms-check" name="agree_terms" required checked>
                                <span class="terms-text">
                                    I have read and agree to the <a href="#">Ticket Terms &amp; Conditions</a>.
                                    I understand that all sales are final and tickets are non-refundable.
                                </span>
                            </label>

                            <!-- Submit -->
                            <div style="margin-top: 14px;">
                                <button type="submit" class="btn-submit" id="submitBtn">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                    Confirm Order &amp; Send E-Ticket
                                </button>
                            </div>

                            <!-- Webmailer tip note -->
                            <div class="info-banner" style="margin-top: 12px;">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                                <span>
                                    <strong style="color: var(--c-text-2);">Webmailer:</strong>
                                    Pendaftaran akan disimpan ke database dan detail tiket akan diproses untuk dikirim ke email Anda.
                                </span>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Right: Sidebar -->
            <aside class="sidebar-sticky">

                <!-- Order Summary -->
                <div class="sidebar-card">
                    <div class="sidebar-card-head">
                        <span class="sidebar-card-title">Order Summary</span>
                    </div>
                    <div class="sidebar-card-body">
                        <div class="summary-rows">
                            <div class="summary-row">
                                <span class="label" id="sumTierLabel">VIP — Blur Lounge Package</span>
                                <span class="value" id="sumTierPrice">Rp 2.850.000</span>
                            </div>
                            <div class="summary-row">
                                <span class="label">Quantity</span>
                                <span class="value" id="sumQty">× 1</span>
                            </div>
                            <div class="summary-row">
                                <span class="label">Subtotal</span>
                                <span class="value" id="sumSubtotal">Rp 2.850.000</span>
                            </div>
                            <div class="summary-row">
                                <span class="label">Tax (10%)</span>
                                <span class="value" id="sumTax">Rp 285.000</span>
                            </div>
                            <div class="summary-row">
                                <span class="label">Convenience Fee</span>
                                <span class="value" id="sumFee">Rp 15.000</span>
                            </div>
                        </div>

                        <div class="summary-total-row">
                            <span class="summary-total-label">Total</span>
                            <span class="summary-total-value" id="sumTotal">Rp 3.150.000</span>
                        </div>

                        <!-- Seating Map Toggle -->
                        <button type="button" class="map-toggle-btn" onclick="toggleMap()">
                            <div class="map-toggle-inner">
                                <span>View stadium seating map</span>
                                <span class="map-toggle-arrow" id="mapArrow">▾</span>
                            </div>
                        </button>
                    </div>

                    <div class="map-diagram" id="mapDiagram">
                        <div class="stage-label">Stage</div>
                        <div class="map-zone highlight">VIP — Blur Lounge (Front Stage)</div>
                        <div class="map-zone">Festival Ground (Standing GA)</div>
                        <div class="map-zone-row">
                            <div class="map-zone">CAT 1 Left</div>
                            <div class="map-zone">CAT 1 Right</div>
                        </div>
                        <div class="map-zone">Tribune CAT 2 (Upper Bowl)</div>
                    </div>
                </div>

                <!-- Live E-Ticket Preview -->
                <div>
                    <div class="label-overline" style="margin-bottom: 10px;">E-Ticket Preview — syncs live</div>
                    <div class="ticket-preview">
                        <div class="ticket-head">
                            <div class="ticket-head-top">
                                <div class="ticket-artist-name">LANY</div>
                                <div class="ticket-verified-badge">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="11" height="11"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Verified
                                </div>
                            </div>
                            <div class="ticket-tour">a beautiful blur: the world tour</div>
                        </div>
                        <div class="ticket-body">
                            <div class="ticket-fields">
                                <div>
                                    <div class="ticket-field-label">Attendee</div>
                                    <div class="ticket-field-val" id="prevName">Your Name</div>
                                </div>
                                <div>
                                    <div class="ticket-field-label">Category</div>
                                    <div class="ticket-field-val" id="prevTier">VIP</div>
                                </div>
                                <div>
                                    <div class="ticket-field-label">Date & Venue</div>
                                    <div class="ticket-field-val">14 Nov 2026 • Jakarta</div>
                                </div>
                                <div>
                                    <div class="ticket-field-label">Gate / Access</div>
                                    <div class="ticket-field-val" id="prevGate">Gate VIP-A</div>
                                </div>
                                <div style="grid-column: 1 / -1;">
                                    <div class="ticket-field-label">Sent To</div>
                                    <div class="ticket-field-val" id="prevEmail">your@email.com</div>
                                </div>
                            </div>
                            <div class="ticket-barcode-area">
                                <div class="ticket-barcode"></div>
                                <div class="ticket-serial" id="prevSerial">LNY-2026-VIP-001</div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</main>

<!-- ─── Footer ──────────────────────────────────────────────────── -->
<footer>
    <div class="wrapper">
        <div class="footer-inner">
            <span class="footer-copy">© 2026 LANY &amp; TEM Entertainment. All rights reserved.</span>
            <nav class="footer-links">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Contact</a>
                <a href="#">FAQ</a>
            </nav>
        </div>
    </div>
</footer>

<!-- ─── Script ──────────────────────────────────────────────────── -->
<script>
    /* ── State ─────────────────────────────────────── */
    const ADMIN_FEE  = 15000;
    const TAX_RATE   = 0.10;
    let state = {
        tierId:   'vip',
        tierName: 'VIP — Blur Lounge Package',
        tierGate: 'Gate VIP-A • Soundcheck Access',
        price:    2850000,
        qty:      1
    };

    /* ── Helpers ───────────────────────────────────── */
    function idr(n) {
        return 'Rp ' + n.toLocaleString('id-ID');
    }

    /* ── Tier Selection ────────────────────────────── */
    function chooseTier(id, price, name, gate) {
        document.querySelectorAll('.tier-item').forEach(el => el.classList.remove('selected'));
        document.getElementById('tier-' + id).classList.add('selected');

        state.tierId   = id;
        state.tierName = name;
        state.tierGate = gate;
        state.price    = price;

        document.getElementById('hiddenTier').value  = id;
        document.getElementById('hiddenPrice').value = price;

        recalc();
        liveSync();
    }

    /* ── Quantity ──────────────────────────────────── */
    function stepQty(delta) {
        const next = state.qty + delta;
        if (next < 1 || next > 5) return;
        state.qty = next;
        document.getElementById('qtyDisplay').textContent = next;
        document.getElementById('hiddenQty').value        = next;
        document.getElementById('btnMinus').disabled = next === 1;
        document.getElementById('btnPlus').disabled  = next === 5;
        recalc();
        liveSync();
    }

    /* ── Payment Selection ─────────────────────────── */
    function choosePayment(id) {
        document.querySelectorAll('.payment-option').forEach(el => el.classList.remove('selected'));
        document.getElementById('pay-' + id).classList.add('selected');
        document.getElementById('hiddenPayment').value = id;
    }

    /* ── Summary Recalc ────────────────────────────── */
    function recalc() {
        const sub   = state.price * state.qty;
        const tax   = Math.round(sub * TAX_RATE);
        const total = sub + tax + ADMIN_FEE;

        document.getElementById('sumTierLabel').textContent = state.tierName;
        document.getElementById('sumTierPrice').textContent = idr(state.price);
        document.getElementById('sumQty').textContent       = '× ' + state.qty;
        document.getElementById('sumSubtotal').textContent  = idr(sub);
        document.getElementById('sumTax').textContent       = idr(tax);
        document.getElementById('sumFee').textContent       = idr(ADMIN_FEE);
        document.getElementById('sumTotal').textContent     = idr(total);
    }

    /* ── Live E-Ticket Sync ────────────────────────── */
    function liveSync() {
        const name  = document.getElementById('buyer_name').value.trim()  || 'Your Name';
        const email = document.getElementById('buyer_email').value.trim() || 'your@email.com';

        // Shorten tier name to fit the ticket stub nicely
        const shortTier = state.tierName.split('—')[0].trim();
        const gate      = state.tierGate.split('•')[0].trim();

        document.getElementById('prevName').textContent  = name;
        document.getElementById('prevEmail').textContent = email;
        document.getElementById('prevTier').textContent  = shortTier;
        document.getElementById('prevGate').textContent  = gate;
        document.getElementById('prevSerial').textContent = `LNY-2026-${state.tierId.toUpperCase()}-${String(state.qty).padStart(3,'0')}`;
    }

    /* ── Seating Map Toggle ────────────────────────── */
    function toggleMap() {
        const diagram = document.getElementById('mapDiagram');
        const arrow   = document.getElementById('mapArrow');
        diagram.classList.toggle('open');
        arrow.classList.toggle('open');
    }

    /* ── Init ──────────────────────────────────────── */
    recalc();
    liveSync();
    document.getElementById('btnMinus').disabled = true;
</script>

</body>
</html>
