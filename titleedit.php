<?php
require("header.php");

// if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != true){//should make this userid
// header('Location: ../index.php');
// exit();} 

<<<<<<< Updated upstream
require __DIR__ . '\backend/init.php';
$id = $_SESSION['userId'];
=======
    require __DIR__.'\backend/init.php';
    $id = $_SESSION['userId'];
>>>>>>> Stashed changes

$title = selectOne(
    "SELECT title FROM instructions WHERE id = :id",
    [":id" => $id]
);
$description = selectOne(
    "SELECT 'description' FROM instructions WHERE id = :id",
    [":id" => $id]
);
?>

<<<<<<< Updated upstream
<style>
    .editform {
        margin-left: 30%;
        margin-right: 30%;
        margin-top: 25%;
        padding: 50px 0px 50px 0px;
        border-radius: 15px;
        background: rgb(7, 24, 103);
        background: linear-gradient(0deg, rgba(7, 24, 103, 1) 0%, rgba(0, 157, 238, 1) 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2rem;
        font-weight: bold;
    }
</style>
<div class="editform">
    <div class="titledit">
        <form method="POST">
            <div>
                <label value="<?= $title ?>" for="title">Title veranderen</label>
            </div>
            <div>
                <input type="text" name="title">
            </div>
            <div>
                <input type="submit" value="Verander Title">
            </div>
        </form>
=======
<form method="POST" action="">
    <div>
    <label value="<?=$title?>" for="title">Title veranderen</label>
>>>>>>> Stashed changes
    </div>
    <div class="desedit">
        <form method="POST">
            <div>
                <label value="<?= $description ?>" for="discription">beschrijving veranderen</label>
            </div>
            <div>
                <input type="text" name="description">
            </div>
            <div>
                <input type="submit" value="Verander Beschrijving">
            </div>
        </form>
    </div>
<<<<<<< Updated upstream
</div>
=======
</form>
<form method="POST" action=""> 
    <div>
    <label value="<?=$description?>" for="discription">beschrijving veranderen</label>
    </div>
    <div>
    <input type="text" name="description">
    </div>    
    <div>
    <input type="submit" value="Verander Beschrijving">
    </div>
</form>
>>>>>>> Stashed changes
<?php
require('footer.php');
?>