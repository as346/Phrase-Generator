<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            include('config.php');

            if(isset($_POST['btn-save'])){
            $text = $_POST['Vorname'] . ": " . $_POST['phrase_01'] . " " . $_POST['phrase_02'] . " " . $_POST['phrase_03'] . " " . $_POST['phrase_04'] . "\n"; 
            //echo $text;
            file_put_contents($filename, $text, FILE_APPEND);
            
            //$text = file_get_contents($filename);
            }
        ?>

        <div class="container-fluid">
            <div class="col">
                <h1>I say YES to</h1> <br>
                    <form method="post">

                        <div class="row">
                            <input type="text" name="Vorname" placeholder="Dein Vorname" class="form-control">
                        </div>

                        <div class="row">
                            <select class="form-control" name="phrase_01">
                                <option value="Nette">Nette</option>
                                <option value="Bescheidene">Bescheidene</option>
                                <option value="Umwerfende">Umwerfende</option>
                                <option value="Gebrechliche">Gebrechliche</option>
                            </select>
                        </div>   
                        
                        <div class="row">
                            <select class="form-control" name="phrase_02">
                                <option value="Vampire">Vampire</option>
                                <option value="Tofuburger">Tofuburger</option>
                                <option value="Chefs">Chefs</option>
                                <option value="Aliens">Aliens</option>
                            </select>
                        </div>   
                            
                        <div class="row">
                            <select class="form-control" name="phrase_03">
                                <option value="essen">essen</option>
                                <option value="schlemmen">schlemmen</option>
                                <option value="belauschen">belauschen</option>
                                <option value="lieben">lieben</option>
                            </select>   
                        </div>
                            
                        <div class="row">
                            <select class="form-control" name="phrase_04">
                                <option value="Fische">Fische</option>
                                <option value="Mutti">Mutti</option>
                                <option value="Freunde">Freunde</option>
                                <option value="Hitze">Hitze</option>
                            </select>
                        </div>

                        <br>
                            <div class="row">
                                <input type="submit" name="btn-save" value="Generiere – jetzt!">
                            </div>
                        <br>

                    </form>

                <h2>Unsere top Phrasen!</h2>
                    <?php 
                        include('list.php');
                    ?> 
            </div>
        </div>

    </body>
</html>
