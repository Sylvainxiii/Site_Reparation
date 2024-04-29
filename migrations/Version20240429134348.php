<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429134348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_categorie_cat (id INT AUTO_INCREMENT NOT NULL, fk_dom_id_id INT NOT NULL, cat_id INT NOT NULL, cat_nom VARCHAR(50) NOT NULL, cat_description VARCHAR(255) DEFAULT NULL, INDEX IDX_E6B37F4B21CB5FCC (fk_dom_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_categorie_cat ADD CONSTRAINT FK_E6B37F4B21CB5FCC FOREIGN KEY (fk_dom_id_id) REFERENCES fr_domaine_dom (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_categorie_cat DROP FOREIGN KEY FK_E6B37F4B21CB5FCC');
        $this->addSql('DROP TABLE fr_categorie_cat');
    }
}
