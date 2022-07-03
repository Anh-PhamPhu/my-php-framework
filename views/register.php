<div class="container mt-4">
    <h1>Register</h1>
    <?php
        $form = \app\core\form\Form::begin('', "post")
    ?>
        <?php
            echo $form->field($model, 'firstname')
        ?>
        <?php
            echo $form->field($model, 'lastname')
        ?>
        <?php
            echo $form->field($model, 'email')
        ?>
        <?php
            echo $form->field($model, 'password')->passwordField()
        ?>
        <button type="submit" class="btn btn-primary mt-4">Register</button>

    <?php
        echo \app\core\form\Form::end()
    ?>
    <!-- <form action="/register" method="POST">
        <div class="form-group mt-2">
            <label for="firstname">First Nane</label>
            <input type="text" 
                    id="firstname" 
                    placeholder="Your's First Name" 
                    name="firstname" 
                    class="form-control">
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Your's Last Name" name="lastname">
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Your's Email" name="email">
        </div>
        <div class="form-group mt-2">
            <label for="password">Pasword</label>
            <input type="password" class="form-control" id="password" placeholder="Your's PassWord" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Register</button>
    </form> -->
</div>