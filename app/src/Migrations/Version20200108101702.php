<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200108101702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, agency_id INT DEFAULT NULL, user_id INT DEFAULT NULL, address VARCHAR(255) NOT NULL, zipcode VARCHAR(5) NOT NULL, city VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_741D53CDCDEADB2A (agency_id), UNIQUE INDEX UNIQ_741D53CDA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDCDEADB2A FOREIGN KEY (agency_id) REFERENCES agency (id)');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, ADD phone INT NOT NULL, DROP nom, DROP prenom, DROP num_voie, DROP nom_rue, DROP code_postale, DROP ville, DROP portable, CHANGE date_naissance date_birth DATE NOT NULL');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A157108F2A');
        $this->addSql('DROP INDEX IDX_5D9F75A157108F2A ON employee');
        $this->addSql('ALTER TABLE employee CHANGE id_agence_id agency_id INT NOT NULL');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1CDEADB2A FOREIGN KEY (agency_id) REFERENCES agency (id)');
        $this->addSql('CREATE INDEX IDX_5D9F75A1CDEADB2A ON employee (agency_id)');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D57108F2A');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D99DED506');
        $this->addSql('DROP INDEX IDX_292FFF1D99DED506 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1D57108F2A ON vehicule');
        $this->addSql('ALTER TABLE vehicule ADD numberplate VARCHAR(255) NOT NULL, ADD category VARCHAR(255) NOT NULL, ADD brand VARCHAR(255) NOT NULL, ADD model VARCHAR(255) NOT NULL, ADD gearbox VARCHAR(255) NOT NULL, ADD cylinder VARCHAR(255) NOT NULL, ADD fuel VARCHAR(255) NOT NULL, ADD young_driver TINYINT(1) NOT NULL, DROP id_agence_id, DROP plaque_matricule, DROP categorie, DROP marque, DROP modele, DROP boite_vitesse, DROP cylindre, DROP carburant, DROP jeune_conducteur, DROP disponible, CHANGE id_client_id agency_id INT DEFAULT NULL, CHANGE annee year DATE NOT NULL, CHANGE prix price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DCDEADB2A FOREIGN KEY (agency_id) REFERENCES agency (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DCDEADB2A ON vehicule (agency_id)');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE99DED506');
        $this->addSql('DROP INDEX IDX_E00CEDDE99DED506 ON booking');
        $this->addSql('ALTER TABLE booking ADD date_start DATE NOT NULL, ADD date_end DATE NOT NULL, DROP date_depart, DROP date_retour, CHANGE id_client_id customer INT NOT NULL, CHANGE statut status VARCHAR(255) NOT NULL, CHANGE date_reservation date_booked DATETIME NOT NULL, CHANGE prix price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE81398E09 FOREIGN KEY (customer) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE81398E09 ON booking (customer)');
        $this->addSql('ALTER TABLE agency ADD name VARCHAR(255) NOT NULL, DROP nom_agence, DROP num_voie, DROP nom_rue, DROP code_postal, DROP ville');
        $this->addSql('ALTER TABLE customer CHANGE date_inscription date_register DATE NOT NULL, CHANGE carte_credit credit_card INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE place');
        $this->addSql('ALTER TABLE agency ADD num_voie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD nom_rue VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD code_postal INT NOT NULL, ADD ville VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE name nom_agence VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE81398E09');
        $this->addSql('DROP INDEX IDX_E00CEDDE81398E09 ON booking');
        $this->addSql('ALTER TABLE booking ADD date_depart DATE NOT NULL, ADD date_retour DATE NOT NULL, DROP date_start, DROP date_end, CHANGE customer id_client_id INT NOT NULL, CHANGE status statut VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE date_booked date_reservation DATETIME NOT NULL, CHANGE price prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE99DED506 FOREIGN KEY (id_client_id) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE99DED506 ON booking (id_client_id)');
        $this->addSql('ALTER TABLE customer CHANGE date_register date_inscription DATE NOT NULL, CHANGE credit_card carte_credit INT NOT NULL');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1CDEADB2A');
        $this->addSql('DROP INDEX IDX_5D9F75A1CDEADB2A ON employee');
        $this->addSql('ALTER TABLE employee CHANGE agency_id id_agence_id INT NOT NULL');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A157108F2A FOREIGN KEY (id_agence_id) REFERENCES agency (id)');
        $this->addSql('CREATE INDEX IDX_5D9F75A157108F2A ON employee (id_agence_id)');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD nom_rue VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD code_postale INT NOT NULL, ADD ville VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD portable INT NOT NULL, DROP firstname, DROP lastname, CHANGE date_birth date_naissance DATE NOT NULL, CHANGE phone num_voie INT NOT NULL');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DCDEADB2A');
        $this->addSql('DROP INDEX IDX_292FFF1DCDEADB2A ON vehicule');
        $this->addSql('ALTER TABLE vehicule ADD id_agence_id INT NOT NULL, ADD plaque_matricule VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD marque VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD modele VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD boite_vitesse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD cylindre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD carburant VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD disponible TINYINT(1) NOT NULL, DROP numberplate, DROP category, DROP brand, DROP model, DROP gearbox, DROP cylinder, DROP fuel, CHANGE agency_id id_client_id INT DEFAULT NULL, CHANGE year annee DATE NOT NULL, CHANGE young_driver jeune_conducteur TINYINT(1) NOT NULL, CHANGE price prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D57108F2A FOREIGN KEY (id_agence_id) REFERENCES agency (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D99DED506 FOREIGN KEY (id_client_id) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D99DED506 ON vehicule (id_client_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D57108F2A ON vehicule (id_agence_id)');
    }
}
