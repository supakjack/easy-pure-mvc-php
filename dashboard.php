<!-- start page -->
<?php
require_once(__DIR__ . '/templates/header.php');
require_once(__DIR__ . '/controllers/User_controller.php');
$User_controller = new User_controller();
$users = $User_controller->get_all_user();
if (count($_POST)) {
    $User_controller->add_user();
}
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $index => $user) {
        ?>
            <tr>
                <th scope="row"><?php echo $index + 1; ?></th>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->password; ?></td>
                <td><?php echo $user->description; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<form action="http://localhost/www/member/dashboard.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
        <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" name="password" id="password" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">We'll never share your passwird with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- end page -->
<?php require_once(__DIR__ . '/templates/footer.php') ?>