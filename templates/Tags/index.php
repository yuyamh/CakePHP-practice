<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[] $tags
 */
?>
<div class="content">
    <ul>
        <?php foreach ($tags as $tag) : ?>
            <li>
                <time><?= $tag->created->i18nFormat('YYYY年MM月dd日 HH:mm'); ?></time>
                <?= $this->Html->link($tag->title, [
                    'action'     => 'view',
                    $tag->id
                ])
                ?>
            </li>
            <hr>
    </ul>
    <?php endforeach ?>

    <?php if ($this->Paginator->total() > 1) : ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< 最初') ?>
                <?= $this->Paginator->prev('< 前へ') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('次へ >') ?>
                <?= $this->Paginator->last('最後 >>') ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
