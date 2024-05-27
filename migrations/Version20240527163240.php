<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240527163240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_categorie_cat (id INT AUTO_INCREMENT NOT NULL, fk_dom_id_id INT NOT NULL, cat_nom VARCHAR(50) NOT NULL, cat_description VARCHAR(255) DEFAULT NULL, cat_date_edit DATE DEFAULT NULL, cat_date_add DATE DEFAULT NULL, INDEX IDX_E6B37F4B21CB5FCC (fk_dom_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_domaine_dom (id INT AUTO_INCREMENT NOT NULL, dom_nom VARCHAR(50) NOT NULL, dom_date_add DATE DEFAULT NULL, dom_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_etape_intervention_eti (id INT AUTO_INCREMENT NOT NULL, fk_int_id_id INT NOT NULL, fk_out_id_id INT DEFAULT NULL, eti_titre VARCHAR(50) NOT NULL, eti_description LONGTEXT DEFAULT NULL, eti_duree TIME DEFAULT NULL, eti_photo_1 VARCHAR(100) DEFAULT NULL, eti_photo_2 VARCHAR(100) DEFAULT NULL, eti_photo_3 VARCHAR(100) DEFAULT NULL, eti_date_add DATE DEFAULT NULL, eti_date_edit DATE DEFAULT NULL, INDEX IDX_96AA78F2EE686118 (fk_int_id_id), INDEX IDX_96AA78F2BCA335EF (fk_out_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_intervention_int (id INT AUTO_INCREMENT NOT NULL, fk_obj_id_id INT DEFAULT NULL, fk_uti_id_id INT DEFAULT NULL, int_type VARCHAR(50) NOT NULL, int_date_debut DATE DEFAULT NULL, int_date_fin DATE DEFAULT NULL, int_numero_de_serie VARCHAR(50) DEFAULT NULL, int_difficulte INT DEFAULT NULL, int_description LONGTEXT DEFAULT NULL, int_visibilite INT NOT NULL, int_date_add DATE DEFAULT NULL, int_date_edit DATE DEFAULT NULL, INDEX IDX_2B7A0F7AFD3CEA4E (fk_obj_id_id), INDEX IDX_2B7A0F7A4FEE0090 (fk_uti_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_marque_mar (id INT AUTO_INCREMENT NOT NULL, mar_nom VARCHAR(50) NOT NULL, mar_date_add DATE DEFAULT NULL, mar_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_objet_obj (id INT AUTO_INCREMENT NOT NULL, fk_mar_id_id INT NOT NULL, fk_sca_id_id INT NOT NULL, obj_reference VARCHAR(50) NOT NULL, obj_caracteristiques LONGTEXT DEFAULT NULL, obj_manuel VARCHAR(255) DEFAULT NULL, obj_date_add DATE DEFAULT NULL, obj_date_edit DATE DEFAULT NULL, INDEX IDX_121B09049741782 (fk_mar_id_id), INDEX IDX_121B090479650F4F (fk_sca_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_outils_out (id INT AUTO_INCREMENT NOT NULL, out_nom VARCHAR(50) NOT NULL, out_reference VARCHAR(50) DEFAULT NULL, out_description LONGTEXT DEFAULT NULL, out_photo VARCHAR(100) DEFAULT NULL, out_date_add DATE DEFAULT NULL, out_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_pieces_detachees_pid (id INT AUTO_INCREMENT NOT NULL, pid_reference VARCHAR(50) NOT NULL, pid_marque VARCHAR(50) DEFAULT NULL, pid_description LONGTEXT DEFAULT NULL, pid_lien_achat VARCHAR(100) DEFAULT NULL, pid_date_add DATE DEFAULT NULL, pid_date_edit DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_remplacement_rem (id INT AUTO_INCREMENT NOT NULL, fk_pid_id_id INT NOT NULL, fk_eti_id_id INT DEFAULT NULL, rem_qte INT DEFAULT NULL, rem_cause VARCHAR(100) DEFAULT NULL, rem_date_add DATE DEFAULT NULL, rem_date_edit DATE DEFAULT NULL, INDEX IDX_17A54A1A831000E5 (fk_pid_id_id), INDEX IDX_17A54A1AE32E42E1 (fk_eti_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_sous_categori_sca (id INT AUTO_INCREMENT NOT NULL, fk_cat_id_id INT DEFAULT NULL, sca_nom VARCHAR(50) NOT NULL, sca_description VARCHAR(255) DEFAULT NULL, sca_date_add DATE DEFAULT NULL, sca_date_edit DATE DEFAULT NULL, INDEX IDX_24172C23A266F92A (fk_cat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_utilisateur_uti (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, uti_nom VARCHAR(100) DEFAULT NULL, uti_prenom VARCHAR(100) DEFAULT NULL, uti_naissance_date DATE DEFAULT NULL, uti_avatar VARCHAR(255) DEFAULT NULL, uti_date_add DATE DEFAULT NULL, uti_date_edit DATE DEFAULT NULL, UNIQUE INDEX UNIQ_F04EE341E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_categorie_cat ADD CONSTRAINT FK_E6B37F4B21CB5FCC FOREIGN KEY (fk_dom_id_id) REFERENCES fr_domaine_dom (id)');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti ADD CONSTRAINT FK_96AA78F2EE686118 FOREIGN KEY (fk_int_id_id) REFERENCES fr_intervention_int (id)');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti ADD CONSTRAINT FK_96AA78F2BCA335EF FOREIGN KEY (fk_out_id_id) REFERENCES fr_outils_out (id)');
        $this->addSql('ALTER TABLE fr_intervention_int ADD CONSTRAINT FK_2B7A0F7AFD3CEA4E FOREIGN KEY (fk_obj_id_id) REFERENCES fr_objet_obj (id)');
        $this->addSql('ALTER TABLE fr_intervention_int ADD CONSTRAINT FK_2B7A0F7A4FEE0090 FOREIGN KEY (fk_uti_id_id) REFERENCES fr_utilisateur_uti (id)');
        $this->addSql('ALTER TABLE fr_objet_obj ADD CONSTRAINT FK_121B09049741782 FOREIGN KEY (fk_mar_id_id) REFERENCES fr_marque_mar (id)');
        $this->addSql('ALTER TABLE fr_objet_obj ADD CONSTRAINT FK_121B090479650F4F FOREIGN KEY (fk_sca_id_id) REFERENCES fr_sous_categori_sca (id)');
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD CONSTRAINT FK_17A54A1A831000E5 FOREIGN KEY (fk_pid_id_id) REFERENCES fr_pieces_detachees_pid (id)');
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD CONSTRAINT FK_17A54A1AE32E42E1 FOREIGN KEY (fk_eti_id_id) REFERENCES fr_etape_intervention_eti (id)');
        $this->addSql('ALTER TABLE fr_sous_categori_sca ADD CONSTRAINT FK_24172C23A266F92A FOREIGN KEY (fk_cat_id_id) REFERENCES fr_categorie_cat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_categorie_cat DROP FOREIGN KEY FK_E6B37F4B21CB5FCC');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti DROP FOREIGN KEY FK_96AA78F2EE686118');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti DROP FOREIGN KEY FK_96AA78F2BCA335EF');
        $this->addSql('ALTER TABLE fr_intervention_int DROP FOREIGN KEY FK_2B7A0F7AFD3CEA4E');
        $this->addSql('ALTER TABLE fr_intervention_int DROP FOREIGN KEY FK_2B7A0F7A4FEE0090');
        $this->addSql('ALTER TABLE fr_objet_obj DROP FOREIGN KEY FK_121B09049741782');
        $this->addSql('ALTER TABLE fr_objet_obj DROP FOREIGN KEY FK_121B090479650F4F');
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP FOREIGN KEY FK_17A54A1A831000E5');
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP FOREIGN KEY FK_17A54A1AE32E42E1');
        $this->addSql('ALTER TABLE fr_sous_categori_sca DROP FOREIGN KEY FK_24172C23A266F92A');
        $this->addSql('DROP TABLE fr_categorie_cat');
        $this->addSql('DROP TABLE fr_domaine_dom');
        $this->addSql('DROP TABLE fr_etape_intervention_eti');
        $this->addSql('DROP TABLE fr_intervention_int');
        $this->addSql('DROP TABLE fr_marque_mar');
        $this->addSql('DROP TABLE fr_objet_obj');
        $this->addSql('DROP TABLE fr_outils_out');
        $this->addSql('DROP TABLE fr_pieces_detachees_pid');
        $this->addSql('DROP TABLE fr_remplacement_rem');
        $this->addSql('DROP TABLE fr_sous_categori_sca');
        $this->addSql('DROP TABLE fr_utilisateur_uti');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
