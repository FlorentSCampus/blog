<?php
if (!empty($article)) : ?>
    <div class='post'>
        <img src="../img/sylvain-mauroux-WI8phMvAEMI-unsplash.webp" alt="Climbing picture" />
        <p class='content'><?= $article[0]['publication_date'] ?></p>
        <p class='content'><?= $article[0]['pseudo'] ?></p>
        <p class='content'><?= $article[0]['title'] ?></p>
        <p class='content'><?= $article[0]['content'] ?></p>
        <div class="post-buttons">
            <a href='index.php?action=blogPostModify&id=<?= $_GET['id'] ?>'>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                    <path d="M16 5l3 3" />
                </svg>
            </a>
            <a href='index.php?action=blogPostDelete&id=<?= $_GET['id'] ?>'>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" stroke-width="0" fill="currentColor" />
                    <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" stroke-width="0" fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>
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