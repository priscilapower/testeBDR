<?php
use Migrations\AbstractSeed;

/**
 * Tarefa seed.
 */
class TarefaSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'titulo' => 'Primeira Tarefa',
                'descricao' => 'Essa é a descrição da primeira tarefa',
                'prioridade' => 1
            ],
            [
                'titulo' => 'Segunda Tarefa',
                'descricao' => 'Essa é a descrição da segunda tarefa',
                'prioridade' => 2
            ],
            [
                'titulo' => 'Terceira Tarefa',
                'descricao' => 'Essa é a descrição da terceira tarefa',
                'prioridade' => 3
            ]
        ];

        $table = $this->table('tarefa');
        $table->insert($data)->save();
    }
}
