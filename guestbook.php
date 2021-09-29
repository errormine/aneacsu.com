<?php 
$description = 'According to Wikipedia, &quot;A guestbook is a paper or electronic means for a visitor to acknowledge a visit to a site, physical or web-based, and leave details such as their name, postal or electronic address and any comments.&quot;';
include("include/head.php")
?>
    <body> 
        <?php include("include/header.html")?>
        <main>
            <section id="description">
                <h2 class="title">guestbook</h2>
                <div class="content"><?php echo $description ?></div>
            </section>
            <section id="guestbook">
                <h2 class="title">previous guests</h2>
                <div class="content">
                    <table>
                        <?php
                            try {
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $conn = new mysqli('localhost:3306', 'anon', 'anon', 'aneacsu.com');

                                if ($conn->connect_error) 
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM Guestbook ORDER BY ID DESC";
                                $result = $conn->query($sql);
                                $success = true;

                                if ($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>";
                                        echo "<td class='left'>" . $row["Name"] . "</td>";
                                        echo "<td class='middle'>" . $row["Comment"] . "<td>";
                                        echo "<td class='align-right mobile-hidden right'>" . $row["Date"] . "</td>";
                                        echo "</tr>";
                                    }
                                }
                                else
                                {
                                    echo "0 results";
                                }
                                $conn->close();
                            } catch (Exception $e) {
                                $success = false;
echo '<pre>
<pre> _______________________________________
/ I don\'t know how you managed to break \
\ this page, but here we are.           /
 ---------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>';
                            }
                        ?>
                    </table>
                </div>
            </section>
            <?php if($success) { ?>
            <section id="sign">
                <h2 class="title">sign</h2>
                <div class="content">
                    <form method="POST" action="/post">
                        <ul>
                            <li>
                                <input type="text" name="name" placeholder="Name" maxlength="12" required>
                            </li>
                            <li class="flex-big">
                                <input type="text" name="comment" placeholder="Comment" maxlength="32" required>
                            </li>
                            <li>
                                <input type="submit" value="Submit">
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
            <?php } ?>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </body>
</html>