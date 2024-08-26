<?php $name = $request->query->get('name', 'World') ?>

Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> !

This is an example. You can create your own controller in src/Controller
and its rendered template in src/Pages.
Do not forget to register the route.
