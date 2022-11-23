<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-up.css">
    <title>Sign Up</title>
</head>

<body>
    <?php include_once '../res/header.html'; ?>
    <main>
        <form action="setup/setup.php" method="get">
            <h2>Black Mesa</h2>

            <input type="text" name="name" <?= 'value="' . (isset($_GET['name']) ? $_GET['name'] : '') . '"' ?> placeholder=" " required>
            <label data-text="Nome"></label>
            <input type="email" name="email" <?= 'value="' . (isset($_GET['email']) ? $_GET['email'] : '') . '"' ?> placeholder=" " required>
            <label data-text="Email"></label>
            <input type="password" name="password" placeholder=" " required>
            <label data-text="Senha"></label>
            <input type="password" name="passwordconfirm" placeholder=" " required>
            <label data-text="Confirme a senha"></label>
            <p>Gênero:
                <?= '<label>Masculino <input type="radio" name="genre" value="M"' .  (isset($_GET['genre']) ? ($_GET['genre'] == 'M' ? 'checked' : '') : '') . '></label>' ?>
                <?= '<label>Feminino <input type="radio" name="genre" value="F" ' . (isset($_GET['genre']) ? ($_GET['genre'] == 'F' ? 'checked' : '') : '') . '></label>' ?>
            </p>
            <input type="submit" value="Sing up">
        </form>
    </main>
    <?php include_once '../res/footer.html' ?>
</body>

</html>