<?php
declare(strict_types=1);

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'username'       => 'admin',
                'password' => $this->_setPassword('admin'),
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
            [
                'username'       => 'yamada',
                'password' => $this->_setPassword('yamada'),
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
