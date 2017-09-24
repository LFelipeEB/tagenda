<?php


use Phinx\Migration\AbstractMigration;

class ContatosMigrations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table("contatos");
        $table
            ->addColumn("usuario_id", "integer")
            ->addColumn("nome", "string")
            ->addColumn("email", "string")
            ->addColumn("endereco", "text")
            ->addColumn("telefone", "string", ['limit'=>11])
            ->addColumn("modified", "timestamp", ['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn("created", "timestamp", ['default'=>'CURRENT_TIMESTAMP'])
            ->addForeignKey('usuario_id', "usuarios", "id")
            ->create();

    }
}
