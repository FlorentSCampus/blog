SELECT articles.id, pseudo, title, content, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id WHERE articles.id = 1