<?php
require_once 'layouts/header.tpl.php';
require_once 'layouts/footer.tpl.php';

if (!empty($article)) :
    for ($i = 0; $i < count($article); $i++) : ?>
        <div class="post">
            <p class="content"><?= $article[$i]['publication_date'] ?></p>
            <p class="content"><?= $article[$i]['pseudo'] ?></p>
            <p class="content"><?= $article[$i]['title'] ?></p>
            <p class="content"><?= $article[$i]['content'] ?></p>
        </div>
    <?php endfor;
endif;
if (!empty($comment)) :
    for ($i = 0; $i < count($comment); $i++) : ?>
        <div class="comment">
            <p class="content"><?= $comment[$i]['comment_date'] ?></p>
            <p class="content"><?= $comment[$i]['pseudo'] ?></p>
            <p class="content"><?= $comment[$i]['comment'] ?></p>
        </div>
<?php
    endfor;
endif; ?>