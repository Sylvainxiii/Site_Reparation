<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505162151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_sous_categori_sca (id INT AUTO_INCREMENT NOT NULL, fk_cat_id_id INT DEFAULT NULL, sca_nom VARCHAR(50) NOT NULL, sca_description VARCHAR(255) DEFAULT NULL, INDEX IDX_24172C23A266F92A (fk_cat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_sous_categori_sca ADD CONSTRAINT FK_24172C23A266F92A FOREIGN KEY (fk_cat_id_id) REFERENCES fr_categorie_cat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_sous_categori_sca DROP FOREIGN KEY FK_24172C23A266F92A');
        $this->addSql('DROP TABLE fr_sous_categori_sca');
    }
}
