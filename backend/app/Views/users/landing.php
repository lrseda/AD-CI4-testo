<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - CodeIgniter 4 App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    <?= view('fragments/header') ?>
    
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Welcome to Our Platform
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-indigo-100">
                    Build amazing applications with CodeIgniter 4
                </p>
                <div class="flex justify-center space-x-4">
                    <?= view('fragments/buttons', ['type' => 'primary', 'text' => 'Get Started', 'link' => '/signup']) ?>
                    <?= view('fragments/buttons', ['type' => 'secondary', 'text' => 'Learn More', 'link' => '/roadmap']) ?>
                </div>
            </div>
        </section>

        <!-- Features Section with Cards -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                    Our Features
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?= view('fragments/card', [
                        'title' => 'Fast Development',
                        'description' => 'Build applications quickly with CodeIgniter 4\'s powerful features and elegant syntax.',
                        'icon' => 'rocket'
                    ]) ?>
                    
                    <?= view('fragments/card', [
                        'title' => 'Secure & Reliable',
                        'description' => 'Enterprise-grade security features to keep your data safe and your users protected.',
                        'icon' => 'shield'
                    ]) ?>
                    
                    <?= view('fragments/card', [
                        'title' => 'Scalable Architecture',
                        'description' => 'Built to grow with your business. From startup to enterprise scale.',
                        'icon' => 'chart'
                    ]) ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <?= view('fragments/cta') ?>
    </main>
    
    <?= view('fragments/footer') ?>
</body>
</html>