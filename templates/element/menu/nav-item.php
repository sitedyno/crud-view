<?php
$options = $item->getOptions();
$name = $name ?? $this->getName();

$classes[] = $options['class'] ?? null;
$classes[] = 'nav-link';
if ($name === $item->getUrl()['controller']) {
    $classes[] = 'active';
}
$options['class'] = implode(' ', $classes);
?>
<li class="nav-item">
    <?php if ($item->getUrl() === null) : ?>
        <span class="nav-link disabled"><?= $item->getTitle() ?></span>
    <?php else : ?>
        <?= $this->Html->link($item->getTitle(), $item->getUrl(), $options); ?>
    <?php endif; ?>
</li>
