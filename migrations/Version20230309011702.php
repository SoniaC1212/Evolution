<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309011702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD coach_id INT DEFAULT NULL, ADD titre VARCHAR(20) NOT NULL, DROP title, CHANGE description description VARCHAR(255) NOT NULL, CHANGE img img LONGTEXT NOT NULL, CHANGE dt date DATE NOT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA73C105691 FOREIGN KEY (coach_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA73C105691 ON event (coach_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA73C105691');
        $this->addSql('DROP INDEX IDX_3BAE0AA73C105691 ON event');
        $this->addSql('ALTER TABLE event ADD title VARCHAR(255) NOT NULL, DROP coach_id, DROP titre, CHANGE description description VARCHAR(500) NOT NULL, CHANGE img img VARCHAR(255) NOT NULL, CHANGE date dt DATE NOT NULL');
    }
}