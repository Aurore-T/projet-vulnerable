<h1>Welcome, you are logged !</h1>

<h2>List of users</h2>
<?php foreach ($users as $user): ?>
    <p><?= $user['username'] ?></p>
<?php endforeach ?>
