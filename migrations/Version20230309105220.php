<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309105220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD coach_id INT DEFAULT NULL, ADD titre VARCHAR(20) NOT NULL, ADD lieu VARCHAR(30) NOT NULL, ADD pos1 DOUBLE PRECISION NOT NULL, ADD pos2 DOUBLE PRECISION NOT NULL, DROP title, CHANGE description description VARCHAR(255) NOT NULL, CHANGE img img LONGTEXT NOT NULL, CHANGE dt date DATE NOT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA73C105691 FOREIGN KEY (coach_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA73C105691 ON event (coach_id)');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1171F7E88B');
        $this->addSql('ALTER TABLE participant CHANGE dt date_participation DATE NOT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1171F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA73C105691');
        $this->addSql('DROP INDEX IDX_3BAE0AA73C105691 ON event');
        $this->addSql('ALTER TABLE event ADD title VARCHAR(255) NOT NULL, DROP coach_id, DROP titre, DROP lieu, DROP pos1, DROP pos2, CHANGE description description VARCHAR(500) NOT NULL, CHANGE img img VARCHAR(255) NOT NULL, CHANGE date dt DATE NOT NULL');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1171F7E88B');
        $this->addSql('ALTER TABLE participant CHANGE date_participation dt DATE NOT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1171F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
    }
}
