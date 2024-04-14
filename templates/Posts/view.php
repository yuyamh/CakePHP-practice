<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>

<div class="content">
    <p><?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm'); ?></p>
    <h3><?= h($post->title); ?></h3>
    <?= $this->Text->autoParagraph(h($post->body)); ?>
    <?php if (!empty($post->tags)) : ?>
    <p>
        <small>タグ：
            <?php foreach ($post->tags as $tag) : ?>
                <?= $this->Html->link(
                    $tag->title,
                    ['controller' => 'Tags', 'action' => 'view', $tag->id]
                ) ?>
                <?= $tag !== end($post->tags) ? ',' : '' ?>
            <?php endforeach ?>
        </small>
    </p>
    <?php endif; ?>
    <p>
        <small>
            投稿者：<?= $post->user->username ?>
        </small>
    </p>
    <hr>
    <?= $this->Html->link('記事を読む', [
        'action' => 'index',
    ], ['class' => 'button']) ?>
</div>
