<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-head.html") ?>
    <title>alt-tablog</title>
</head>
<body>
    <?php include("include/blog-header.html") ?>
    <div id="body">
        <?php include("include/blog-nav.html") ?>
        <main>
            <?php include("include/get_posts.php") ?>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
        $(function () {
            var includes = $('[data-include]')

            $.each(includes, function() {
                var file = $(this).data('include')
                
                $(this).load(file)
            })
        })    
    </script>
</body>
</html>