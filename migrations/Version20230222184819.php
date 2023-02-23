<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222184819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1167B3B43D');
        $this->addSql('DROP INDEX UNIQ_D79F6B1167B3B43D ON participant');
        $this->addSql('ALTER TABLE participant DROP users_id');
        $this->addSql('ALTER TABLE user ADD participant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499D1C3019 FOREIGN KEY (participant_id) REFERENCES participant (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6499D1C3019 ON user (participant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1167B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D79F6B1167B3B43D ON participant (users_id)');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6499D1C3019');
        $this->addSql('DROP INDEX IDX_8D93D6499D1C3019 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP participant_id');
    }
}
