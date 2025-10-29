<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Modul 4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Tilbake til moduler
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="modul-4-oppgave1.php">Oppgave 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave2.php">Oppgave 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave3.php">Oppgave 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave4.php">Oppgave 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modul-4-oppgave5.php">Oppgave 5</a>
        </li>
    </div>
  </div>
</nav>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Katarina Kirkhus</title>
</head>

<body>
    <div class="centered-content"> 
        <?php 



            function matrise_print()
            {

                $a = array('Data 1');

                $a[3] = 'Data 2';
                $a[5] = 'Data 3';
                $a[7] = 'Data 4';
                $a[8] = 'Data 5'; 
                $a[15] = 'Data 6';
                
                print_r($a);

                foreach($a as $n => $v){
                    echo("<br> Verdien $v har nøkkelen $n");
                }
            }

            matrise_print();
        ?>
    </div>

</body>
</html>


