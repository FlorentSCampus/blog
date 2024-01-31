<?php
require_once 'layouts/header.tpl.php';

if (!empty($cat)) : ?>
    <select name="category" onchange="location = this.value;">
        <option value="">--Please choose a category--</option>
        <?php for ($i = 0; $i < count($cat); $i++) : ?>
            <option value="index.php?action=blogPostCategory&name=<?= $cat[$i]['category_name'] ?>"><?= $cat[$i]['category_name'] ?></option>
        <?php endfor; ?>
    </select>
    <?php endif;
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
<br>
<br>
<br>
<a href='index.php?action=blogPostCreate'>CREATE ARTICLE ?</a>

<?php require_once 'layouts/footer.tpl.php'; ?>