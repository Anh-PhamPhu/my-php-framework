<div class="container mt-4">
    <h1>Login Here</h1>
    <?php
        $form = \app\core\form\Form::begin('/login', "post")
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