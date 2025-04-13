<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Breeze</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800">Welcome to Breeze</h1>
        <p class="text-gray-600 mt-2">Laravel Breeze のシンプルなウェルカムページ</p>
        <div class="mt-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-green-500 text-white rounded">ログイン</a>
                <a href="{{ route('register') }}" class="ml-2 px-4 py-2 bg-gray-500 text-white rounded">新規登録</a>
            @endauth
        </div>
    </div>
</body>
</html>
