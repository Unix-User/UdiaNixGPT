<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBDB5B33WY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VBDB5B33WY');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@^2.0');

        body {
            font-family: 'Figtree', sans-serif;
        }

        .chat-container {
            background-color: #f9fafb;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .messages {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .message {
            padding: 10px;
            border-bottom: 1px solid #f0f0f0;
        }

        .message:last-child {
            border-bottom: none;
        }

        .input-container {
            display: flex;
            width: 100%;
            max-width: 600px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 0;
        }

        button {
            padding: 10px 20px;
            background-color: #ff2d20;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #e0241a;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <h1 class="text-3xl font-bold mb-4">UdiaNixGPT</h1>
        <div class="messages">
            @if(session('response'))
            <div>
                <p class="message">{{ session('response')['response'] }}</p>
            </div>
            @endif
        </div>
        <form action="/send-message" method="POST" class="input-container">
            @csrf
            <input type="text" name="message" placeholder="Escreva sua pergunta aqui...">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>