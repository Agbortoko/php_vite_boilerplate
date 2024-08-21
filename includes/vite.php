<?php require_once __DIR__ . '/../vendor/autoload.php'; ?>

<?php if (isDevelopment()): ?>
    <script type="module" src="http://localhost:5176/@vite/client"></script>
    <script type="module" src="http://localhost:5176/resources/js/app.js"></script>
<?php endif ?>

<?php if(isProduction()): ?>
    <link rel="stylesheet" href="<?= resourceUrl(vite('css')); ?>">
    <script type="module" src="<?= resourceUrl(vite('js')); ?>"></script>
<?php endif; ?>