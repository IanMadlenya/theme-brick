<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article">

    <?php if ($image = $post->get('image.src')): ?>
        <div class="tm-blog-image">
            <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
        </div>
    <?php endif ?>

    <div class="uk-grid uk-margin-large-top">
        <div class="tm-article-meta uk-width-large-1-4">

            <p class="uk-article-meta">
                <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
            </p>

        </div>

        <div class="uk-width-large-3-4">

            <h1 class="uk-article-title"><?= $post->title ?></h1>

            <div class="uk-margin"><?= $post->content ?></div>

            <?= $view->render('blog/comments.php') ?>

        </div>
   </div>

</article>
