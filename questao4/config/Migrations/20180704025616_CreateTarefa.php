<?php
use Migrations\AbstractMigration;

class CreateTarefa extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('tarefa');
        $table->addColumn('titulo', 'string');
        $table->addColumn('descricao', 'string');
        $table->addColumn('prioridade', 'integer');
        $table->create();
    }
}
