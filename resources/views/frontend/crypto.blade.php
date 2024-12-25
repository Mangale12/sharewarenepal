<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with Crypto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-center">Pay with Crypto</h2>
        <form action="{{ route('create.charge') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount (USD)</label>
                <input type="number" class="form-control" id="amount" name="amount" step="0.01" placeholder="Enter the amount" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Pay with Crypto</button>
        </form>
    </div>
</body>
</html>
