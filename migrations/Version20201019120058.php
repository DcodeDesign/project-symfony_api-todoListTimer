<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019120058 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cat_task DROP FOREIGN KEY FK_4F4D2C94C09A1CAE');
        $this->addSql('DROP INDEX IDX_4F4D2C94C09A1CAE ON cat_task');
        $this->addSql('ALTER TABLE cat_task DROP id_cat_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cat_task ADD id_cat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cat_task ADD CONSTRAINT FK_4F4D2C94C09A1CAE FOREIGN KEY (id_cat_id) REFERENCES tasks (id)');
        $this->addSql('CREATE INDEX IDX_4F4D2C94C09A1CAE ON cat_task (id_cat_id)');
    }
}
