<body class="container">

<br>
<br>
    <h3> Users List</h3>
    <br>
    <br>

    <?php if( !isset($users) && empty($users)){ ?>
        <li> users list is empty</li>
    <?php } else { ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user):?>
                <tr>
                    <th scope="row"><?= $user['id'] ?></th>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        <?= $pager->links() ?>

    <?php } ?>
