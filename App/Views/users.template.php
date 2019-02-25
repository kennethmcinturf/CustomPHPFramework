<?php require('Partials/head.php') ?>

<h1>All Users</h1>

<?php foreach($users as $user) :?>
<p><?= $user->names; ?></p>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require('Partials/footer.php') ?>
