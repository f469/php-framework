<form action="/form" method="post">
    <label>Username :</label>
    <input name="user_name" id="user_name" type="text" />

    <label>User Id :</label>
    <input name="user_id" id="user_id" type="number" /></p>

    <button type="submit">Send</button>
</form>

User : <?php echo $request->get('user_name') ?? '...' ?>
<br>
Id :  <?php echo $request->get('user_id') ?? '...' ?>
