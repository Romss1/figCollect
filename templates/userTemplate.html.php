<form method="post">
    <labe>OUi</label>
        <input type="text" name="username">
        <input type="text" name="email">
        <input type="text" name="password">
        <button type="submit">Click</button>
</form>
<h1><?= $user->getUsername();
    $user->geEmail();
    $user->getPassword() ?></h1>