<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200108104027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD place_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649DA6A219 FOREIGN KEY (place_id) REFERENCES place (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649DA6A219 ON user (place_id)');
        $this->addSql('ALTER TABLE agency ADD place_id INT NOT NULL');
        $this->addSql('ALTER TABLE agency ADD CONSTRAINT FK_70C0C6E6DA6A219 FOREIGN KEY (place_id) REFERENCES place (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70C0C6E6DA6A219 ON agency (place_id)');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CDA76ED395');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CDCDEADB2A');
        $this->addSql('DROP INDEX UNIQ_741D53CDCDEADB2A ON place');
        $this->addSql('DROP INDEX UNIQ_741D53CDA76ED395 ON place');
        $this->addSql('ALTER TABLE place DROP agency_id, DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agency DROP FOREIGN KEY FK_70C0C6E6DA6A219');
        $this->addSql('DROP INDEX UNIQ_70C0C6E6DA6A219 ON agency');
        $this->addSql('ALTER TABLE agency DROP place_id');
        $this->addSql('ALTER TABLE place ADD agency_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDCDEADB2A FOREIGN KEY (agency_id) REFERENCES agency (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_741D53CDCDEADB2A ON place (agency_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_741D53CDA76ED395 ON place (user_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649DA6A219');
        $this->addSql('DROP INDEX UNIQ_8D93D649DA6A219 ON user');
        $this->addSql('ALTER TABLE user DROP place_id');
    }
}
