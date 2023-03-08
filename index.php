<!DOCTYPE html>
<html>

<head>
    <title>Classe abstract</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>

<body>

    <?php

    require_once __DIR__ . '/app/Personne.php';
    require_once __DIR__ . '/app/Enseignant.php';
    require_once __DIR__ . '/app/Eleve.php';

    require_once __DIR__ . '/vendor/autoload.php';

    use Ecole\app\Eleve;
    use Ecole\app\Enseignant;

    $eleve = [
        $eleve1 = new Eleve('Jean', 'Michel', '1 rue des Ecoles', 'CM2'),
        $eleve2 = new Eleve('Claude', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve3 = new Eleve('Robert', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve4 = new Eleve('Bernard', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve5 = new Eleve('Nicolas', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve6 = new Eleve('Fleur', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve7 = new Eleve('Fabrice', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve8 = new Eleve('Ulrich', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve9 = new Eleve('Benedicte', 'Sophie', '2 rue des Ecoles', 'CM2'),
        $eleve10 = new Eleve('Marlos', 'Sophie', '2 rue des Ecoles', 'CM2')
    ];

    $enseignant = [
        $enseignant1 = new Enseignant('Leblanc', 'Marc', '3 rue des Ecoles', 'Mathématiques'),
        $enseignant2 = new Enseignant('Dupont', 'Paul', '4 rue des Ecoles', 'Français')
    ];

    ?>

    <?php echo '<h1><strong>Il y a ' . Eleve::getEffectif() . ' élèves</strong></h1>'; ?>

    <div class="groupeEleveProf">

        <?php foreach ($eleve as $eleves) { ?>

            <div class="person-info">
                <?php var_dump($eleves->getEtatCivil()); ?>
            </div>

        <?php } ?>
    </div>



    <?php echo '<h1><strong>Il y a ' . Enseignant::getEffectifProf() . ' professeurs</strong></h1>'; ?>

    <div class="groupeEleveProf">

        <?php foreach ($enseignant as $enseignants) { ?>

            <div class="person-info ensaignant">
                <?php var_dump($enseignants->getEtatCivil()); ?>
            </div>


        <?php } ?>

    </div>
</body>
