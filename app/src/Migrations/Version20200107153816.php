<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200107153816 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agences (id INT AUTO_INCREMENT NOT NULL, nom_agence VARCHAR(255) NOT NULL, num_voie VARCHAR(255) NOT NULL, nom_rue VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bookings (id INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, id_agence VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date_reservation DATE NOT NULL, date_depart DATE NOT NULL, date_retour DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cars (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, annee DATE NOT NULL, boite_vitesse VARCHAR(255) NOT NULL, cylindree VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, jeune_conducteur TINYINT(1) NOT NULL, prix DOUBLE PRECISION NOT NULL, id_agence INT NOT NULL, disponible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, date_inscription DATE NOT NULL, carte_bancaire INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, id_employe INT NOT NULL, id_agence INT NOT NULL, poste INT NOT NULL, date_embauche DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE agences');
        $this->addSql('DROP TABLE bookings');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE employees');
    }
}
