<?php
if (!empty($article)) : ?>
    <div class='post'>
        <p class='content'><?= $article[0]['publication_date'] ?></p>
        <p class='content'><?= $article[0]['pseudo'] ?></p>
        <p class='content'><?= $article[0]['title'] ?></p>
        <p class='content'><?= $article[0]['content'] ?></p>
    </div>
    <br>
    <a style="color: green;" href='index.php?action=blogPostModify&id=<?= $_GET['id'] ?>'>MODIFY ARTICLE ?</a>
    <br>
    <br>
    <a style="color: red;" href='index.php?action=blogPostDelete&id=<?= $_GET['id'] ?>'>DELETE ARTICLE ?</a>
    <br>
    <br>
    <br>
    <?php endif;
if (!empty($comment)) :
    for ($i = 0; $i < count($comment); $i++) : ?>
        <div class='comment'>
            <p class='content'><?= $comment[$i]['comment_date'] ?></p>
            <p class='content'><?= $comment[$i]['pseudo'] ?></p>
            <p class='content'><?= $comment[$i]['comment'] ?></p>
        </div>
        <br>
        <a style="color: green;" href='index.php?action=commentModify&authors_id=<?= $comment[$i]['authors_id'] ?>&articles_id=<?= $_GET['id'] ?>'>MODIFY COMMENT ?</a>
        <br>
        <br>
        <a style="color: red;" href='index.php?action=commentDelete&authors_id=<?= $comment[$i]['authors_id'] ?>&articles_id=<?= $_GET['id'] ?>'>DELETE COMMENT ?</a>
        <br>
        <br>
        <br>
<?php
    endfor;
endif; ?>
<br>
<a href='index.php?action=commentCreate&id=<?= $_GET['id'] ?>'>CREATE COMMENT ?</a>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>