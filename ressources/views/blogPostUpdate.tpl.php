<form action='index.php?action=blogPostModify&id=<?= $_GET['id'] ?>' method='post'>
    <div>
        <textarea id='content' name='content' maxlength='150' required></textarea>
    </div>
    <input type='submit' value='Modify ?' />
</form>
<br>
<a href='index.php?action=blogPost&id=<?= $_GET['id'] ?>'>RETURN TO ARTICLE</a>
<br>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>