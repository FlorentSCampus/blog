<form action='index.php?action=commentModify&authors_id=<?= $_GET['authors_id'] ?>&articles_id=<?= $_GET['articles_id'] ?>' method='post'>
    <div>
        <textarea id='comment' name='comment' maxlength='150' required></textarea>
    </div>
    <input type='submit' value='Modify ?' />
</form>
<br>
<a href='index.php?action=blogPost&id=<?= $_GET['articles_id'] ?>'>RETURN TO ARTICLE</a>
<br>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>