<?php
$options = $item->getOptions();
if ($this->getName() === $item->getUrl()['controller']) {
    $classes[] = $options['class'] ?? null;
    $classes[] = 'active';
    $options['class'] = implode(' ', $classes);
}
?>
<li class="nav-item">
    <?php if ($item->getUrl() === null) : ?>
        <span class="nav-link disabled"><?= $item->getTitle() ?></span>
    <?php else : ?>
        <?= $this->Html->link($item->getTitle(), $item->getUrl(), $options); ?>
    <?php endif; ?>
</li>
