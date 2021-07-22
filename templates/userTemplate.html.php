<form method="post">
    <labe>OUi</label>
        <input type="text" name="username" value="">
        <input type="text" name="email" value="">
        <input type="text" name="password" value="">
        <button type="submit">Click</button>
</form>
<h1><?= $user->getUsername(); ?>
    <?= $user->getEmail(); ?>
    <?= $user->getPassword(); ?></h1>