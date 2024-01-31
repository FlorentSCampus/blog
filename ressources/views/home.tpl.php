<?php
require_once 'layouts/header.tpl.php';

if (!empty($cat)) : ?>
    <select name="category" onchange="location = this.value;">
        <option value="">-- Please choose a category --</option>
        <?php for ($i = 0; $i < count($cat); $i++) : ?>
            <option value="index.php?action=blogPostCategory&name=<?= $cat[$i]['category_name'] ?>"><?= $cat[$i]['category_name'] ?></option>
        <?php endfor; ?>
    </select>
    <?php endif;
if (!empty($res)) :
    for ($i = 0; $i < count($res); $i++) : ?>
        <a class="post" href="index.php?action=blogPost&id=<?= $res[$i]['id'] ?>">
            <img src="../img/sylvain-mauroux-WI8phMvAEMI-unsplash.webp" alt="Climbing picture" />
            <div class="content">
                <p><?= $res[$i]['title'] ?></p>
                <p><?= $res[$i]['content'] ?></p>
            </div>
        </a>
<?php
    endfor;
endif; ?>
<br>
<br>
<br>
<a href='index.php?action=blogPostCreate'>CREATE ARTICLE ?</a>

<?php require_once 'layouts/footer.tpl.php'; ?>