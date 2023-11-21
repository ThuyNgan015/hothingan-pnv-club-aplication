<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            border: 2px solid #ffd700;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        div {
            line-height: 50px;
        }

        img {
            max-width: 20%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>

<div class="container">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT6ljM4tkLR1SM0mim_CCqzGFJZOj0xmfCTujoMoxu_s4Pcp-G4" alt="Image">
        <?php
        if (isset($_GET["name"])) {
            echo "<h1>Thx you " . $_GET["name"] . " !!</h1>";
        }
        if (isset($_GET["club"])) {
            echo "We received your application for the " . $_GET["club"];
        }
        echo "<br>";
        if (isset($_GET["skills"])) {
            $selectedSkills = $_GET["skills"];
            if (is_array($selectedSkills)) {
                echo "Your are " . implode(" and ", $selectedSkills);
            } else {
                echo "Your are " . $selectedSkills;
            }
        }
        echo "<br>";
        if (isset($_GET["day"])) {
            echo "You will be available on " . $_GET["day"];
        }
        ?>
    </div>
