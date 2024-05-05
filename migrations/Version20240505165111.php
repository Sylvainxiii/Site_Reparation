<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505165111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fr_etape_intervention_eti (id INT AUTO_INCREMENT NOT NULL, fk_int_id_id INT NOT NULL, fk_out_id_id INT DEFAULT NULL, eti_titre VARCHAR(50) NOT NULL, eti_description LONGTEXT DEFAULT NULL, eti_duree TIME DEFAULT NULL, eti_photo_1 VARCHAR(100) DEFAULT NULL, eti_photo_2 VARCHAR(100) DEFAULT NULL, eti_photo_3 VARCHAR(100) DEFAULT NULL, INDEX IDX_96AA78F2EE686118 (fk_int_id_id), INDEX IDX_96AA78F2BCA335EF (fk_out_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_intervention_int (id INT AUTO_INCREMENT NOT NULL, fk_obj_id_id INT DEFAULT NULL, fk_uti_id_id INT NOT NULL, int_type VARCHAR(50) NOT NULL, int_date_debut DATE DEFAULT NULL, int_date_fin DATE DEFAULT NULL, int_numero_de_serie VARCHAR(50) DEFAULT NULL, int_difficulte INT DEFAULT NULL, int_description LONGTEXT DEFAULT NULL, int_visibilite INT NOT NULL, INDEX IDX_2B7A0F7AFD3CEA4E (fk_obj_id_id), INDEX IDX_2B7A0F7A4FEE0090 (fk_uti_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fr_objet_obj (id INT AUTO_INCREMENT NOT NULL, fk_mar_id_id INT NOT NULL, fk_sca_id_id INT NOT NULL, obj_reference VARCHAR(50) NOT NULL, obj_caracteristiques LONGTEXT DEFAULT NULL, obj_manuel VARCHAR(255) DEFAULT NULL, INDEX IDX_121B09049741782 (fk_mar_id_id), INDEX IDX_121B090479650F4F (fk_sca_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti ADD CONSTRAINT FK_96AA78F2EE686118 FOREIGN KEY (fk_int_id_id) REFERENCES fr_intervention_int (id)');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti ADD CONSTRAINT FK_96AA78F2BCA335EF FOREIGN KEY (fk_out_id_id) REFERENCES fr_outils_out (id)');
        $this->addSql('ALTER TABLE fr_intervention_int ADD CONSTRAINT FK_2B7A0F7AFD3CEA4E FOREIGN KEY (fk_obj_id_id) REFERENCES fr_objet_obj (id)');
        $this->addSql('ALTER TABLE fr_intervention_int ADD CONSTRAINT FK_2B7A0F7A4FEE0090 FOREIGN KEY (fk_uti_id_id) REFERENCES fr_utilisateur_uti (id)');
        $this->addSql('ALTER TABLE fr_objet_obj ADD CONSTRAINT FK_121B09049741782 FOREIGN KEY (fk_mar_id_id) REFERENCES fr_marque_mar (id)');
        $this->addSql('ALTER TABLE fr_objet_obj ADD CONSTRAINT FK_121B090479650F4F FOREIGN KEY (fk_sca_id_id) REFERENCES fr_sous_categori_sca (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_etape_intervention_eti DROP FOREIGN KEY FK_96AA78F2EE686118');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti DROP FOREIGN KEY FK_96AA78F2BCA335EF');
        $this->addSql('ALTER TABLE fr_intervention_int DROP FOREIGN KEY FK_2B7A0F7AFD3CEA4E');
        $this->addSql('ALTER TABLE fr_intervention_int DROP FOREIGN KEY FK_2B7A0F7A4FEE0090');
        $this->addSql('ALTER TABLE fr_objet_obj DROP FOREIGN KEY FK_121B09049741782');
        $this->addSql('ALTER TABLE fr_objet_obj DROP FOREIGN KEY FK_121B090479650F4F');
        $this->addSql('DROP TABLE fr_etape_intervention_eti');
        $this->addSql('DROP TABLE fr_intervention_int');
        $this->addSql('DROP TABLE fr_objet_obj');
    }
}
