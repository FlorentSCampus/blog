<?php
if (!empty($article)) :
    for ($i = 0; $i < count($article); $i++) : ?>
        <div class='post'>
            <p class='content'><?= $article[$i]['publication_date'] ?></p>
            <p class='content'><?= $article[$i]['pseudo'] ?></p>
            <p class='content'><?= $article[$i]['title'] ?></p>
            <p class='content'><?= $article[$i]['content'] ?></p>
        </div>
        <br>
        <a style="color: green;" href='index.php?action=blogPostModify&id=<?= $_GET['id'] ?>'>MODIFY ARTICLE ?</a>
        <br>
        <br>
        <a style="color: red;" href='index.php?action=blogPostDelete&id=<?= $_GET['id'] ?>'>DELETE ARTICLE ?</a>
        <br>
        <br>
        <br>
    <?php endfor;
endif;
if (!empty($comment)) :
    for ($i = 0; $i < count($comment); $i++) : ?>
        <div class='comment'>
            <p class='content'><?= $comment[$i]['comment_date'] ?></p>
            <p class='content'><?= $comment[$i]['pseudo'] ?></p>
            <p class='content'><?= $comment[$i]['comment'] ?></p>
        </div>
<?php
    endfor;
endif; ?>
<a href='index.php?action=home'>RETURN TO HOME</a>