
<section>
    <form action="/form.php" method="post">
        <fieldset>
            <legend>Контактная информация</legend>
            <p>
                <label for="contact_1">ФИО</label>
                <input type="text" name="name" id="contact_1" pattern="^[А-Яа-яЁё\s]+$"/>  
            </p>
            <p>
                <label for="contact_2">Телефон</label>
                <input type="phone" name="telephone" id="contact_2" pattern="^(\+375)(29|25|44|33)(\d{7})$" placeholder="+375-" required/>
            </p>
            <p>
                <label for="contact_3">Электронная почта</label>
                <input type="email" name="email" id="contact_3" pattern="^.+@.+\..+$" required/>
            </p>
            <p>
                <label for="contact_4">Адрес</label>
                <input type="text" name="address" id="contact_4" pattern="^[А-Я.,а-яЁё\s-/]+$" />
            </p>
        </fieldset>
        <fieldset>
            <legend>Пол</legend>
            <div>
                <input type="radio" name="gender" id="gender_1" value="male" checked/>
                <label for="gender_1">Мужчина</label>
       
                <input type="radio" name="gender" id="gender_2" value="female" />
                <label for="gender_2">Женщина</label>
            </div>
        </fieldset>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
</section>

<?php
$method = $_SERVER['REQUEST_METHOD'];
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])){
        echo "Пожалуйста, введите ваше имя."."</br>";
    }
    if(empty($_POST["address"])){
        echo "Пожалуйста, введите ваш адрес."."</br>";
    }
}