<!DOCTYPE html>
<html>
<head>
    <title>Memes</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin-top: 40px; /* Add top margin */
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        img {
            max-width: 100%;
            max-height: 80vh;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Random Meme</h1>

    <img src="{{ $meme['url'] }}" alt="{{ $meme['name'] }}">
    <p>Name: {{ $meme['name'] }}</p>
    <!--<p>ID: {{ $meme['id'] }}</p>
    <p>Dimensions: {{ $meme['width'] }} x {{ $meme['height'] }}</p>
    <p>Box Count: {{ $meme['box_count'] }}</p> -->

    <button onclick="refreshPage()">Refresh</button>

    <script>
        function refreshPage() {
            location.reload();
        }
    </script>
</body>
</html>
