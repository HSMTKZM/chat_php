<?php
session_start();
ini_set('display_errors','1');
$path = "./chat.json";
$messages = json_decode(file_get_contents($path));

if(empty($_SESSION["user"]["name"])){
    header('location:login.php');
    exit();
}else{
    $user = $_SESSION["user"];
}

// $user = $_SESSION["user"];
$userName = $user["name"];
$userColor = $user["color"];
// $userMessage = $user["message"];

?>
<?php
$title = "Chat";
require_once("./layout.php");
?>


        <h1 style="color:<?= $userColor?>">ChatPage</h1>
        <a href="./logout.php">Log Out</a>
        <section class="container col-sm-8">
            <ul>
                <?php if(empty($messages)):?>
                <p>There's no chat. Please enter the room and greet us!</p>
                <?php else:?>
                <?php foreach($messages as $msg):?>
                <li style="color:<?= $msg->color?>">
                    Name:<?= $msg->name?><br />
                    Message:<?= $msg->message?>
                </li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
            <form action="input.php"class="form"method="post">
                <input type="hidden"name="message[name]"value="<?= $userName?>">
                <input type="hidden"name="message[color]"value="<?= $userColor?>">
                <div>
                    Name:<?= $userName?><br />
                    Color:<?= $userColor?>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <input type="text"class="form-control"name="message[message]"/>
                </div>
                <button class="form-control"type="submit">Entering a Room!</button>
            </form>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>