<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250128175843 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `like` ADD post_id_id INT DEFAULT NULL, ADD account_id_id INT DEFAULT NULL, DROP post_id, DROP account_id');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3E85F12B8 FOREIGN KEY (post_id_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B349CB4726 FOREIGN KEY (account_id_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_AC6340B3E85F12B8 ON `like` (post_id_id)');
        $this->addSql('CREATE INDEX IDX_AC6340B349CB4726 ON `like` (account_id_id)');
        $this->addSql('ALTER TABLE post ADD account_id_id INT DEFAULT NULL, DROP account_id');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D49CB4726 FOREIGN KEY (account_id_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D49CB4726 ON post (account_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3E85F12B8');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B349CB4726');
        $this->addSql('DROP INDEX IDX_AC6340B3E85F12B8 ON `like`');
        $this->addSql('DROP INDEX IDX_AC6340B349CB4726 ON `like`');
        $this->addSql('ALTER TABLE `like` ADD post_id VARCHAR(255) NOT NULL, ADD account_id VARCHAR(255) NOT NULL, DROP post_id_id, DROP account_id_id');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D49CB4726');
        $this->addSql('DROP INDEX IDX_5A8A6C8D49CB4726 ON post');
        $this->addSql('ALTER TABLE post ADD account_id VARCHAR(255) NOT NULL, DROP account_id_id');
    }
}
