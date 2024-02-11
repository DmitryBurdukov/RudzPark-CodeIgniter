<?php 
    $buttonText;
    switch ($slug) {
        case 'enter':
            $buttonText = 'Войти';
            $action = 'Enter/redirect';
            break;
        case 'registration':
            $buttonText = 'Зарегистрироваться';
            $action = 'Registration';
            break;
    };

    echo "<section class='enter container'>
        <form action='{$action}/newUser' class='enter__form' method='POST'>
            <input class='enter__input' type='text' name='login' id='' placeholder='Введите логин'>
            <input class='enter__input' type='password' name='pass' id='' placeholder='Введите пароль'>
            <input class='enter__input' type='submit' name='enterSubmit' value={$buttonText}>
        </form>
    </section>"

?>