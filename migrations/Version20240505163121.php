<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505163121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_remplacement_rem (id INT AUTO_INCREMENT NOT NULL, fk_pid_id_id INT NOT NULL, rem_qte INT DEFAULT NULL, rem_cause VARCHAR(100) DEFAULT NULL, INDEX IDX_17A54A1A831000E5 (fk_pid_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD CONSTRAINT FK_17A54A1A831000E5 FOREIGN KEY (fk_pid_id_id) REFERENCES fr_pieces_detachees_pid (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP FOREIGN KEY FK_17A54A1A831000E5');
        $this->addSql('DROP TABLE fr_remplacement_rem');
    }
}
