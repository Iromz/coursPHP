<?php

session_start();
//  session_unset();
//  session_destroy();

$error = '';

if (!isset($_SESSION['contact'])) {
    require_once __DIR__ . '/includes/contactList.php';
    $_SESSION['contact'] = $contact;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['name'] ?? '';
    $newMail = $_POST['mail'] ?? '';

    if ($newName) {
        if ($newMail) {
            array_unshift($_SESSION['contact'], [
                'id' => uniqid(),
                'name' => $newName,
                'mail' => $newMail,
                'fav' => false,
            ]);
        } else {
            $error = 'Il faut mettre un mail !';
        }
    } else {
        $error = 'Il faut mettre un nom !';
    }
}

?>




<!DOCTYPE html>
<html lang="fr">

<head>

    <div class="container">
        <?php require_once __DIR__ . '/includes/head.php' ?>

        <title>Contact Book</title>




        <?php require_once __DIR__ . '/includes/header.php' ?>

        <main class="content">
            <div class="todo-container">
                <h1>Liste de contact</h1>

                <form action="/" method="POST" class="todo-form">
                    <input type="text" name="name" autocomplete="off" autofocus placeholder="le nom">
                    <input type="e-mail" name="mail" autocomplete="off" autofocus placeholder="le mail">
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                </form>
                <?php if ($error): ?>
                    <p class="text-danger"><?= $error ?></p>
                <?php endif; ?>

                <ul class="todo-list">

                    <?php
                    foreach ($_SESSION['contact'] as $list):
                    ?>
                        <li class="todo-item <?php echo $list['fav'] ? 'low-opacity' : '' ?>" >
                            <span class="todo-name"><?= $list['name'] ?></span>
                            <span class="todo-name"><?= $list['mail'] ?></span>
                            <a href="/function/fav.php?id=<?= $list['id'] ?>">
                                <button class="btn btn-primary btn-small"><?= $list['fav'] ? 'Mettre en favoris' : 'Enlever des favoris'; ?></button>
                            </a>
                            <a href="/function/modif.php?id=<?= $list['id'] ?>">
                                <button class="btn btn-modifier btn-small">Modifier</button>
                            </a>
                            <a href="/function/remove_contact.php?id=<?= $list['id'] ?>">
                                <button class="btn btn-danger btn-small">Supprimer</button>
                            </a>

                        </li>
                    <?php endforeach ?>
                </ul>


            </div>
        </main>

        <?php require_once __DIR__ . '/includes/footer.php' ?>
    </div>

    </body>

</html>