<?php
if (!empty($_GET['name'])) :
    for ($i = 0; $i < count($res); $i++) : ?>
        <div class='post'>
            <p class='content'><?= $res[$i]['publication_date'] ?></p>
            <p class='content'><?= $res[$i]['title'] ?></p>
            <p class='content'><?= $res[$i]['content'] ?></p>
        </div>
        <br>
        <br>
<?php endfor;
endif; ?>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>