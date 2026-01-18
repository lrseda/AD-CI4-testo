<?php
$type = $type ?? 'primary';
$text = $text ?? 'Button';
$link = $link ?? '#';
$disabled = $disabled ?? false;

$classes = [
    'primary' => 'bg-white text-indigo-600 hover:bg-gray-100',
    'secondary' => 'bg-indigo-500 text-white hover:bg-indigo-400',
    'border' => 'bg-transparent border-2 border-white text-white hover:bg-white hover:text-indigo-600',
    'disabled' => 'bg-gray-400 text-gray-700 cursor-not-allowed',
];

$buttonClass = $disabled ? $classes['disabled'] : ($classes[$type] ?? $classes['primary']);
?>

<?php if ($disabled): ?>
    <button 
        disabled
        class="px-8 py-3 rounded-lg font-semibold transition-all duration-200 <?= $buttonClass ?>"
    >
        <?= esc($text) ?>
    </button>
<?php else: ?>
    <a 
        href="<?= esc($link) ?>"
        class="inline-block px-8 py-3 rounded-lg font-semibold transition-all duration-200 <?= $buttonClass ?>"
    >
        <?= esc($text) ?>
    </a>
<?php endif; ?>