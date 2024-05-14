<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240514120427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_utilisateur_uti ADD uti_nom VARCHAR(100) DEFAULT NULL, ADD uti_prenom VARCHAR(100) DEFAULT NULL, ADD uti_naissance_date DATE DEFAULT NULL, ADD uti_avatar VARCHAR(255) DEFAULT NULL, ADD uti_date_add DATE DEFAULT NULL, ADD uti_date_edit DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_utilisateur_uti DROP uti_nom, DROP uti_prenom, DROP uti_naissance_date, DROP uti_avatar, DROP uti_date_add, DROP uti_date_edit');
    }
}
