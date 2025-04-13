<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>
        <form method="POST" action="/login" class="mt-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded mt-1" required>
            </div>
            <div class="mt-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded mt-1" required>
            </div>
            <div class="flex items-center justify-between mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="text-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded mt-4 hover:bg-blue-600">Log in</button>
        </form>
    </div>
</body>
</html>
