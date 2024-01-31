<form action='index.php?action=blogCommentCreate&id=<?= $_GET['id'] ?>' method='post'>
    <select name="pseudo" id="pseudo" required>
        <option value="">-- Please choose an authors --</option>
        <?php
        if (!empty($authors)) :
            for ($i = 0; $i < count($authors); $i++) : ?>
                <option value="<?= $authors[$i]['id'] ?>"><?= $authors[$i]['pseudo'] ?></option>
            <?php endfor; ?>
    </select>
<?php endif; ?>
<div>
    <textarea id='comment' name='comment' maxlength='150' placeholder='Your comment' required></textarea>
</div>
<input type="submit" value="Send your comment" />
</form>
<br>
<a href='index.php?action=blogPost&id=<?= $_GET['id'] ?>'>RETURN TO ARTICLE</a>
<br>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>