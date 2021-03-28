<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210328101847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE primary_element_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE adjectif_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE conjonction_coordination_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE conjonction_subordination_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE determinant_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE nom_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE preposition_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE verbe_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE adjectif (id INT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE conjonction_coordination (id INT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE conjonction_subordination (id INT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE determinant (id INT NOT NULL, mot VARCHAR(255) NOT NULL, genre BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE nom (id INT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE preposition (id INT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE verbe (id INT NOT NULL, mot VARCHAR(255) NOT NULL, groupe INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE primary_element');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE adjectif_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE conjonction_coordination_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE conjonction_subordination_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE determinant_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE nom_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE preposition_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE verbe_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE primary_element_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE primary_element (id INT NOT NULL, type VARCHAR(255) NOT NULL, words JSON NOT NULL, groups JSON DEFAULT NULL, meaning VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE adjectif');
        $this->addSql('DROP TABLE conjonction_coordination');
        $this->addSql('DROP TABLE conjonction_subordination');
        $this->addSql('DROP TABLE determinant');
        $this->addSql('DROP TABLE nom');
        $this->addSql('DROP TABLE preposition');
        $this->addSql('DROP TABLE verbe');
    }
}
