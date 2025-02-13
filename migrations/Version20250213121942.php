<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250213121942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, the_post_id INT NOT NULL, the_user_id INT NOT NULL, INDEX IDX_49CA4E7DAB5B2DCA (the_post_id), INDEX IDX_49CA4E7D47BCFD73 (the_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, creator_id INT NOT NULL, creation_date DATETIME NOT NULL, content VARCHAR(255) NOT NULL, tag VARCHAR(30) NOT NULL, INDEX IDX_885DBAFA61220EA6 (creator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reports (id INT AUTO_INCREMENT NOT NULL, reported_post_id INT NOT NULL, reporter_id INT NOT NULL, INDEX IDX_F11FA745EC0086D7 (reported_post_id), INDEX IDX_F11FA745E1CFE6F5 (reporter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, mail_address VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_MAIL_ADDRESS (mail_address), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DAB5B2DCA FOREIGN KEY (the_post_id) REFERENCES posts (id)');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7D47BCFD73 FOREIGN KEY (the_user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA61220EA6 FOREIGN KEY (creator_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA745EC0086D7 FOREIGN KEY (reported_post_id) REFERENCES posts (id)');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA745E1CFE6F5 FOREIGN KEY (reporter_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE likes DROP FOREIGN KEY FK_49CA4E7DAB5B2DCA');
        $this->addSql('ALTER TABLE likes DROP FOREIGN KEY FK_49CA4E7D47BCFD73');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA61220EA6');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA745EC0086D7');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA745E1CFE6F5');
        $this->addSql('DROP TABLE likes');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE reports');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
