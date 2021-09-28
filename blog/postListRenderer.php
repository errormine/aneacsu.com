<?php
    require_once 'postRenderer.php';

    $posts = getPostsList();
    foreach ($posts as $post) {
        $titleAndSummary = getFirstLines($post['markdown'], 5);
?>
    <section class="markdown">
        <?php echo renderMarkdown($titleAndSummary); ?>
        <div class="post-footer">
            <a class="read-post" href="<?php echo $post['slug']; ?>">Read More</a>
        </div>
    </section>
<?php }?>