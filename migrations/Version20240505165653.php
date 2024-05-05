<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505165653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD fk_eti_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD CONSTRAINT FK_17A54A1AE32E42E1 FOREIGN KEY (fk_eti_id_id) REFERENCES fr_etape_intervention_eti (id)');
        $this->addSql('CREATE INDEX IDX_17A54A1AE32E42E1 ON fr_remplacement_rem (fk_eti_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP FOREIGN KEY FK_17A54A1AE32E42E1');
        $this->addSql('DROP INDEX IDX_17A54A1AE32E42E1 ON fr_remplacement_rem');
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP fk_eti_id_id');
    }
}
