<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
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
                'title'       => '最初の投稿',
                'description' => "<script>alert('JavaScriptの実行');</script>\n最初の投稿の概要\n改行文章",
                'body'        => '内容',
                'published'   => 1,
                'user_id'     => 1,
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
            [
                'title'       => '2番目の投稿',
                'description' => '2番目の投稿の概要',
                'body'        => '内容',
                'published'   => 1,
                'user_id'     => 2,
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
            [
                'title'       => '3番目の投稿',
                'description' => '3番目の投稿の概要',
                'body'        => '内容',
                'published'   => 1,
                'user_id'     => 1,
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
            [
                'title'       => '4番目の投稿',
                'description' => '4番目の投稿の概要',
                'body'        => '内容',
                'published'   => 1,
                'user_id'     => 2,
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
            [
                'title'       => '5番目の投稿',
                'description' => '5番目の投稿の概要',
                'body'        => '内容',
                'published'   => 1,
                'user_id'     => 1,
                'created'     => '2024-04-09 21:00:00',
                'modified'    => '2024-04-09 21:00:00',
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
