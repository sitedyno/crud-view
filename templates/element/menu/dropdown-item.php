<?php
$options = $item->getOptions();
$name = $name ?? $this->getName();

$classes[] = $options['class'] ?? null;
$classes[] = 'dropdown-item';
if ($name === $item->getUrl()['controller']) {
    $classes[] = 'active';
}
$options['class'] = implode(' ', $classes);
?>
<li>
    <?php if ($item->getUrl() === null) : ?>
        <span class="dropdown-item disabled"><?= $item->getTitle() ?></span>
    <?php else : ?>
        <?= $this->Html->link($item->getTitle(), $item->getUrl(), $options); ?>
    <?php endif; ?>
</li>
