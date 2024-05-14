<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240514074235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_categorie_cat ADD cat_date_edit DATE DEFAULT NULL, ADD cat_date_add DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti ADD eti_date_add DATE DEFAULT NULL, ADD eti_date_edit DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_intervention_int ADD int_date_add DATE DEFAULT NULL, ADD int_date_edit DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_marque_mar ADD mar_date_add DATE DEFAULT NULL, ADD mar_date_edit DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_objet_obj ADD obj_date_add DATE DEFAULT NULL, ADD obj_date_edit DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_remplacement_rem ADD rem_date_add DATE DEFAULT NULL, ADD rem_date_edit DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE fr_sous_categori_sca ADD sca_date_add DATE DEFAULT NULL, ADD sca_date_edit DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fr_sous_categori_sca DROP sca_date_add, DROP sca_date_edit');
        $this->addSql('ALTER TABLE fr_categorie_cat DROP cat_date_edit, DROP cat_date_add');
        $this->addSql('ALTER TABLE fr_remplacement_rem DROP rem_date_add, DROP rem_date_edit');
        $this->addSql('ALTER TABLE fr_marque_mar DROP mar_date_add, DROP mar_date_edit');
        $this->addSql('ALTER TABLE fr_etape_intervention_eti DROP eti_date_add, DROP eti_date_edit');
        $this->addSql('ALTER TABLE fr_objet_obj DROP obj_date_add, DROP obj_date_edit');
        $this->addSql('ALTER TABLE fr_intervention_int DROP int_date_add, DROP int_date_edit');
    }
}
