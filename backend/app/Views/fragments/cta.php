<section class="bg-indigo-700 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
            Ready to Get Started?
        </h2>
        <p class="text-xl text-indigo-100 mb-8">
            Join thousands of developers building amazing applications
        </p>
        <div class="flex justify-center space-x-4">
            <?= view('fragments/buttons', [
                'type' => 'primary',
                'text' => 'Start Free Trial',
                'link' => '/signup'
            ]) ?>
            <?= view('fragments/buttons', [
                'type' => 'border',
                'text' => 'Contact Sales',
                'link' => '#'
            ]) ?>
        </div>
    </div>
</section>