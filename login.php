<?php
session_start();
$_SESSION["user"] = $_POST["user"];
if(isset($_POST["user"])){
    header("location:index.php");
    exit();
}elseif(!empty($_POST["user"]["name"])&&!empty($_POST["user"]["color"])){
    $_SESSION["user"] = $_POST["uesr"];
    header('location:index.php');
    exit();
}
$title = "Login";
require_once("./layout.php");
?>
        <div class="row">
            <h1 style="color:red;">LoginPage</h1>
        </div>
        <div class="row">
            <form action="login.php"class="form- col-sm-8 mx-auto"method="post">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text"class="form-control"name="user[name]"/>
                </div>
                <div class="form-group">
                    <label>Choice Your Color</label>
                    <select name="user[color]" class="form-control">
                        <option value="black">Black</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                    </select>
                </div>
                <button class="form-control" type="submit">Entering a room</button>
            </form>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>