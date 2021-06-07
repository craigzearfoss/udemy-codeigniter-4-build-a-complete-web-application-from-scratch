<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>User<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Users</h1>

    <a href="<?= site_url("/admin/users/new") ?>">New user</a>

    <?php if ($users): ?>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Active</td>
                    <td>Administrator</td>
                    <td>Created at</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>

                    <tr>
                        <td>
                            <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'yes' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'yes' : 'no' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $pager->links() ?>
        <?php //alternate paginator /*<?= $pager->simpleLinks() */?>

    <?php else: ?>

        <p>No users found.</p>

    <?php endif; ?>

<?= $this->endSection() ?>