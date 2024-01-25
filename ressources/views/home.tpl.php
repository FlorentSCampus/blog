<?php
require_once 'layouts/header.tpl.php';
require_once 'layouts/footer.tpl.php';

if (!empty($res)) :
    for ($i = 0; $i < count($res); $i++) : ?>
        <div class="post">
            <p class="content"><?= $res[$i]['publication_date'] ?></p>
            <p class="content"><?= $res[$i]['pseudo'] ?></p>
            <p class="content"><?= $res[$i]['title'] ?></p>
            <p class="content"><?= $res[$i]['content'] ?></p>
        </div>
<?php
    endfor;
endif; ?>