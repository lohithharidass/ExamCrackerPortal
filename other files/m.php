<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Materials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .standards {
            margin: 20px 0;
        }

        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #materials {
            margin-top: 20px;
        }

        .material-list {
            list-style-type: none;
            padding: 0;
        }

        .material-list li {
            margin: 5px 0;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Study Materials</h1>

    <div class="standards">
        <form method="get" action="">
            <button type="submit" name="standard" value="6th">6th Standard</button>
            <button type="submit" name="standard" value="7th">7th Standard</button>
            <button type="submit" name="standard" value="8th">8th Standard</button>
            <button type="submit" name="standard" value="9th">9th Standard</button>
            <button type="submit" name="standard" value="10th">10th Standard</button>
            <button type="submit" name="standard" value="11th">11th Standard</button>
        </form>
    </div>

    <div id="materials">
        <?php
        // Check if a standard is selected
        if (isset($_GET['standard'])) {
            $standard = $_GET['standard'];

            // Set the directory where the materials are stored
            $materialsDir ="C:\wamp64\www\dream_career\data". "/data/{$standard}_std/";

            // Check if the directory exists
            if (is_dir($materialsDir)) {
                echo "<h2>{$standard} Standard Materials</h2>";

                // Scan the directory for files
                $files = scandir($materialsDir);

                // Filter out the '.' and '..' directories
                $files = array_diff($files, array('.', '..'));

                if (!empty($files)) {
                    echo "<ul class='material-list'>";
                    foreach ($files as $file) {
                        $fileUrl = "/data/{$standard}_std/$file";
                        $fileName = pathinfo($file, PATHINFO_FILENAME);
                        echo "<li><a href='$fileUrl' target='_blank'>{$fileName}</a></li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No materials found for {$standard} standard.</p>";
                }
            } else {
                echo "<p>Materials for {$standard} standard are not available.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
