<form action='index.php?action=blogPostModify&id=<?= $article[$i]['id'] ?>' method='post'>
    <div>
        <textarea id='post' name='post' maxlength='150' placeholder='Your post' required></textarea>
    </div>
    <input type='submit' value='Modify ?' />
</form>
<br>
<!-- trouver le moyen de récupérer l'ID pour faire le retour vers l'article précédent ! -->
<a href='index.php?action=blogPost&id=<?= $article[$i]['id'] ?>'>RETURN TO ARTICLE</a>
<br>
<br>
<br>
<a href='index.php?action=home'>RETURN TO HOME</a>