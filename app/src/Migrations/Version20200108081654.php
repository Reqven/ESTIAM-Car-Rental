<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200108081654 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D1457108F2A');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C30057108F2A');
        $this->addSql('ALTER TABLE bookings DROP FOREIGN KEY FK_7A853C3599DED506');
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D1499DED506');
        $this->addSql('ALTER TABLE customers DROP FOREIGN KEY FK_62534E21BA091CE5');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300BA091CE5');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, num_voie INT NOT NULL, nom_rue VARCHAR(255) NOT NULL, code_postale INT NOT NULL, ville VARCHAR(255) NOT NULL, portable INT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT NOT NULL, id_agence_id INT NOT NULL, poste VARCHAR(255) NOT NULL, INDEX IDX_5D9F75A157108F2A (id_agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, id_agence_id INT NOT NULL, id_client_id INT DEFAULT NULL, plaque_matricule VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, annee DATE NOT NULL, boite_vitesse VARCHAR(255) NOT NULL, cylindre VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, jeune_conducteur TINYINT(1) NOT NULL, prix DOUBLE PRECISION NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_292FFF1D57108F2A (id_agence_id), INDEX IDX_292FFF1D99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, statut VARCHAR(255) NOT NULL, date_reservation DATETIME NOT NULL, date_depart DATE NOT NULL, date_retour DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_E00CEDDE99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agency (id INT AUTO_INCREMENT NOT NULL, nom_agence VARCHAR(255) NOT NULL, num_voie VARCHAR(255) NOT NULL, nom_rue VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT NOT NULL, date_inscription DATE NOT NULL, carte_credit INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A157108F2A FOREIGN KEY (id_agence_id) REFERENCES agency (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D57108F2A FOREIGN KEY (id_agence_id) REFERENCES agency (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D99DED506 FOREIGN KEY (id_client_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE99DED506 FOREIGN KEY (id_client_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E09BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE agences');
        $this->addSql('DROP TABLE bookings');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE peoples');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1BF396750');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E09BF396750');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A157108F2A');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D57108F2A');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D99DED506');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE99DED506');
        $this->addSql('CREATE TABLE agences (id INT AUTO_INCREMENT NOT NULL, nom_agence VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, num_voie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, nom_rue VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bookings (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, statut VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_reservation DATETIME NOT NULL, date_depart DATE NOT NULL, date_retour DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_7A853C3599DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cars (id INT AUTO_INCREMENT NOT NULL, id_agence_id INT NOT NULL, id_client_id INT DEFAULT NULL, plaque_matricule VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, marque VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, modele VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, annee DATE NOT NULL, boite_vitesse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, cylindre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, carburant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, jeune_conducteur TINYINT(1) NOT NULL, prix DOUBLE PRECISION NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_95C71D1499DED506 (id_client_id), INDEX IDX_95C71D1457108F2A (id_agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, id_personne_id INT NOT NULL, date_inscription DATE NOT NULL, carte_credit INT NOT NULL, UNIQUE INDEX UNIQ_62534E21BA091CE5 (id_personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, id_agence_id INT NOT NULL, id_personne_id INT NOT NULL, poste VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_BA82C30057108F2A (id_agence_id), UNIQUE INDEX UNIQ_BA82C300BA091CE5 (id_personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE peoples (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_naissance DATE NOT NULL, num_voie INT NOT NULL, nom_rue VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, code_postale INT NOT NULL, ville VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, portable INT NOT NULL, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bookings ADD CONSTRAINT FK_7A853C3599DED506 FOREIGN KEY (id_client_id) REFERENCES customers (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D1457108F2A FOREIGN KEY (id_agence_id) REFERENCES agences (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D1499DED506 FOREIGN KEY (id_client_id) REFERENCES customers (id)');
        $this->addSql('ALTER TABLE customers ADD CONSTRAINT FK_62534E21BA091CE5 FOREIGN KEY (id_personne_id) REFERENCES peoples (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C30057108F2A FOREIGN KEY (id_agence_id) REFERENCES agences (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300BA091CE5 FOREIGN KEY (id_personne_id) REFERENCES peoples (id)');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE agency');
        $this->addSql('DROP TABLE customer');
    }
}
