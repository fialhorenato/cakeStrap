<!-- File: src/Template/Users/index.ctp -->

<h1>Users</h1>

<?= $this->Html->link('Add User', ['action' => 'add']) ?>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Edit</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->password ?></td>
        <td>
          <?= $this->Form->postLink(
         'Delete',
         ['action' => 'delete', $user->id],
         ['confirm' => 'Você tem certeza que quer deletar o usuario ' + $user->username + ' ?'])
     ?>
                <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
        </td>
    </tr>


    <?php endforeach; ?>
</table>
