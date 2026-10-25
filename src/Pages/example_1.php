<form action="/form" method="post">
    <label>Username :</label>
    <input name="user_name" id="user_name" type="text" />

    <label>User Id :</label>
    <input name="user_id" id="user_id" type="number" /></p>

    <button type="submit">Send</button>
</form>

User : <?= htmlspecialchars((string) ($request->get('user_name') ?? '...'), ENT_QUOTES, 'UTF-8') ?>
<br>
Id :  <?= htmlspecialchars((string) ($request->get('user_id') ?? '...'), ENT_QUOTES, 'UTF-8') ?>
