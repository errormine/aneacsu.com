<?php
$content = file_get_contents('https://openlibrary.org/books/' . $_GET['id'] . '/-/widget');
$content = str_replace('//openlibrary.org/static/build/page-book-widget.css', '/style/book-widget.css', $content);

echo $content;