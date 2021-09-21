<?php include("include/head.php")?>
    <body> 
        <?php include("include/header.html")?>
        <main>
            <section id="guestbook">
                <h2 class="title">guestbook</h2>
                <div class="content">
                    <table>
                        <?php
                            $conn = new mysqli('localhost:3306', 'anon', 'anon', 'aneacsu.com');

                            if ($conn->connect_error) 
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Guestbook ORDER BY ID DESC";
                            $result = $conn->query($sql);

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
                        ?>
                    </table>
                </div>
            </section>
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
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </body>
</html>