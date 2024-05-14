<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240514094327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_utilisateur_uti (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F04EE341E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_intervention_int ADD fk_uti_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_intervention_int ADD CONSTRAINT FK_2B7A0F7A4FEE0090 FOREIGN KEY (fk_uti_id_id) REFERENCES fr_utilisateur_uti (id)');
        $this->addSql('CREATE INDEX IDX_2B7A0F7A4FEE0090 ON fr_intervention_int (fk_uti_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_intervention_int DROP FOREIGN KEY FK_2B7A0F7A4FEE0090');
        $this->addSql('DROP TABLE fr_utilisateur_uti');
        $this->addSql('DROP INDEX IDX_2B7A0F7A4FEE0090 ON fr_intervention_int');
        $this->addSql('ALTER TABLE fr_intervention_int DROP fk_uti_id_id');
    }
}
