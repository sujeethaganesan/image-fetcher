<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Image Fetcher</title>

        <?php include DOCROOT.'header.php' ?>
        <script src="script.js"></script>
        <style>
                form input[type=url] 
                {
                        width: 300px
                }
                #output img
                {
                        border: 1px solid #ccc;
                        padding: 10px;
                        margin: 10px;
                        display: inline-block;
                }
        </style>
</head>
<body>
        <h1>Image Fetcher</h1>

        <form action="scan.php" method="post" id="url-form">
                <input type="url" name="url" placeholder="http://" required />
                <input type="submit" value="Get Images" />
        </form>

        <div id="output"></div>

        <?php $article = 1585; include DOCROOT.'footer.php'; ?>

</body>
</html>