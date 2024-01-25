<?php
require_once 'layouts/header.tpl.php';
require_once 'layouts/footer.tpl.php';

if (!empty($res)) :
    for ($i = 0; $i < count($res); $i++) : ?>
        <div class="post">
            <a href="index.php?action=blogPost&id=<?= $res[$i]['id'] ?>">
                <p class="content"><?= $res[$i]['publication_date'] ?></p>
                <p class="content"><?= $res[$i]['title'] ?></p>
            </a>
        </div>
<?php
    endfor;
endif; ?>