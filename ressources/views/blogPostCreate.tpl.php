<form action='index.php?action=blogPostCreate' method='post'>
    <div>
        <input type='text' name='title' id='title' placeholder='Title of your post' required />
    </div>
    <div>
        <select name="rating" id="rating" required>
            <option value="">-- Please choose a rating --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div>
        <textarea id='post' name='post' maxlength='150' placeholder='Your post' required></textarea>
    </div>
    <input type="submit" value="Send your post" />
</form>
<a href="index.php?action=home">RETOUR SUR LA HOME</a>