<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240426201042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_domaine_dom (id INT AUTO_INCREMENT NOT NULL, dom_id INT NOT NULL, dom_nom VARCHAR(50) NOT NULL, dom_date_add DATE DEFAULT NULL, dom_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_outils_out (id INT AUTO_INCREMENT NOT NULL, out_id INT NOT NULL, out_nom VARCHAR(50) NOT NULL, out_reference VARCHAR(50) DEFAULT NULL, out_description LONGTEXT DEFAULT NULL, out_photo VARCHAR(100) DEFAULT NULL, out_date_add DATE DEFAULT NULL, out_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_pieces_detachees_pid (id INT AUTO_INCREMENT NOT NULL, pid_id INT NOT NULL, pid_reference VARCHAR(50) NOT NULL, pid_marque VARCHAR(50) DEFAULT NULL, pid_description LONGTEXT DEFAULT NULL, pid_lien_achat VARCHAR(100) DEFAULT NULL, pid_date_add DATE DEFAULT NULL, pid_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fr_domaine_dom');
        $this->addSql('DROP TABLE fr_outils_out');
        $this->addSql('DROP TABLE fr_pieces_detachees_pid');
    }
}
