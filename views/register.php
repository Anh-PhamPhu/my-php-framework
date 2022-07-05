<div class="container mt-4">
    <h1>Register</h1>
    <?php
        $form = \app\core\form\Form::begin('/register', "post")
    ?>
        <?php
            echo $form->field($user, 'firstname')
        ?>
        <?php
            echo $form->field($user, 'lastname')
        ?>
        <?php
            echo $form->field($user, 'email')
        ?>
        <?php
            echo $form->field($user, 'password')->passwordField()
        ?>
        <button type="submit" class="btn btn-primary mt-4">Register</button>

    <?php
        echo \app\core\form\Form::end()
    ?>
</div>