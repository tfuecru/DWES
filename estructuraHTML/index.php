<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="folder">Folder:</label>
                    <input type="text" id="folder" name="folder" value="">
                </li>
                <li>
                    <label for="file">File:</label>
                    <input type="file" required id="file" name="file">
                </li>
                <li>
                    <label for="send">Send:</label>
                    <input type="submit" id="send" value="send">
                </li>
            </ul>
        </form>
</body>
</html>