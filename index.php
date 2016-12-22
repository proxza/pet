<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<body>

<div id="container">
    <div id="header">
        logo
    </div>

    <div id="navigation">
        menu
    </div>

    <div id="content">
        content
    </div>

    <div id="right-menu">

        <div id="auth">
            <b>Форма авторизации</b>
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td>Ваш логин</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <td>Ваш пароль</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Войти"></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

    <div id="clear">

    </div>

    <div id="footer">
        footer
    </div>
</div>

</body>
</html>
