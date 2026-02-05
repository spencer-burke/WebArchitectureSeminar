<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

    <title>Landing</title>

</head>
<body>
    <main class="container">
        <h1>The Landing Page</h1>

        <button id="get-items-btn">
            Get Items
        </button>

        <div id="data-target"></div>
    </main>
</body>
<script>
    document.getElementById('get-items-btn').addEventListener('click', getItems);

    function getItems() {
        fetch('http://localhost:8000/items', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'text/html'
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                document.getElementById('data-target').outerHTML = html;
            })
            .catch(error => {
                console.error('Error fetching partial:', error);
            });
    }
</script>
</html>
