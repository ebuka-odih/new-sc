<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Session Expired</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f5f7fb;
            --surface: #ffffff;
            --text: #172033;
            --muted: #5f6c84;
            --border: #dbe2ef;
            --accent: #0b5ed7;
            --accent-dark: #084298;
            --warning-bg: #fff4db;
            --warning-border: #f2d38b;
            --warning-text: #7a5800;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at top, rgba(11, 94, 215, 0.12), transparent 32%),
                var(--bg);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .card {
            width: min(100%, 680px);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 18px 40px rgba(23, 32, 51, 0.08);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: var(--warning-bg);
            border: 1px solid var(--warning-border);
            color: var(--warning-text);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        h1 {
            margin: 18px 0 12px;
            font-size: clamp(2rem, 4vw, 2.8rem);
            line-height: 1.05;
        }

        p {
            margin: 0 0 16px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.65;
        }

        .notice {
            margin: 24px 0;
            padding: 18px 20px;
            border-radius: 14px;
            background: #f8fbff;
            border: 1px solid #cfe2ff;
        }

        .notice strong {
            display: block;
            margin-bottom: 8px;
            color: var(--text);
        }

        .steps {
            margin: 0;
            padding-left: 20px;
            color: var(--text);
        }

        .steps li {
            margin-bottom: 10px;
            line-height: 1.55;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            appearance: none;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text);
            border-radius: 12px;
            padding: 12px 18px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            border-color: #c1cbdd;
        }

        .btn-primary {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--accent-dark);
            border-color: var(--accent-dark);
        }

        .help {
            margin-top: 24px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="eyebrow">419 Error</div>
        <h1>Session expired</h1>
        <p>Your secure session is no longer valid, so the last action could not be completed.</p>

        <div class="notice">
            <strong>What to do</strong>
            <ol class="steps">
                <li>Go back to the previous page and refresh it.</li>
                <li>Try the action again after the page finishes loading.</li>
                <li>If it still happens, open the login page and sign in again.</li>
            </ol>
        </div>

        <div class="actions">
            <button type="button" class="btn btn-primary" onclick="window.location.reload();">Refresh Page</button>
            <button type="button" class="btn" onclick="window.history.back();">Go Back</button>
            <a class="btn" href="{{ url('/login') }}">Go To Login</a>
        </div>

        <p class="help">This usually happens after the page stays open for a while, after a deployment, or when the browser is using an old form token.</p>
    </div>
</body>
</html>
