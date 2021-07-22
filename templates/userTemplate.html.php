<form method="post">
    <labe>OUi</label>
        <input type="text" name="username" value="<?= $user->getUsername() ?>">
        <button type="submit">Click</button>
</form>
<h1><?= $user->getUsername() ?></h1>