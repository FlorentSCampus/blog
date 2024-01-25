```mermaid
graph TD
A[Start] --> B[get all posts from database]
B --> C{no blog post ?}
C -- Yes --> D[display empty disclaimer]
C -- No --> E[display blog post]
E --> F{more blogpost?}
F -- Yes --> E
F -- No --> G[End]
```

```mermaid
sequenceDiagram
User->>index.php: ?action=
index.php->>homeController.php: include
homeController.php->>blogPostData.php: lastBlogPosts()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: fetchAll()
PDOStatement-->>blogPostData.php: blogPosts
blogPostData.php-->>homeController.php: blogPosts
homeController.php->>home.tpl.php: blogPosts
home.tpl.php-->>User: display blogPosts
```

```mermaid
sequenceDiagram
User->>index.php: ?action=title
index.php->>blogPostController.php: include
blogPostController.php->>blogPostData.php: blogPostById()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: fetchAll()
PDOStatement-->>blogPostData.php: blogArticles
blogPostData.php-->>blogPostController.php: blogArticles
blogPostController.php->>blogPostData.php: commentsByBlogPost()
blogPostData.php->>PDO: prepare()
PDO-->>blogPostData.php: PDOStatement
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: isSuccess
blogPostData.php->>PDOStatement: fetchAll()
PDOStatement-->>blogPostData.php: blogComments
blogPostData.php-->>blogPostController.php: blogComments
blogPostController.php->>blogPost.tpl.php: blogArticleAndComments
blogPost.tpl.php-->>User: display blogArticleAndComments
```

```mermaid
sequenceDiagram
User->>index.php: ?action=blogPostCreate
index.php->>blogPostCreateController.php: include
blogPostCreateController.php->>blogPostCreate.tpl.php: postForm
blogPostCreate.tpl.php-->>blogPostCreateController.php: postValue
blogPostCreateController.php->>blogPostData.php: blogPostCreate()
blogPostData.php->>PDOStatement: execute()
PDOStatement-->>blogPostData.php: blogPostCreate
blogPostData.php-->>blogPostCreateController.php: blogPostCreate
blogPostCreateController.php->>blogPostCreate.tpl.php: blogPostCreate
blogPostCreate.tpl.php-->>User: display blogPostCreate
```