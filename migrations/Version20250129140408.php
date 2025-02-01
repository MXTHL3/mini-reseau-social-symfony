<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250129140408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, the_post_id INT NOT NULL, the_user_id INT NOT NULL, INDEX IDX_49CA4E7DAB5B2DCA (the_post_id), INDEX IDX_49CA4E7D47BCFD73 (the_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, creator_id INT NOT NULL, creation_date DATETIME NOT NULL, content VARCHAR(255) NOT NULL, INDEX IDX_885DBAFA61220EA6 (creator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DAB5B2DCA FOREIGN KEY (the_post_id) REFERENCES posts (id)');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7D47BCFD73 FOREIGN KEY (the_user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA61220EA6 FOREIGN KEY (creator_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE users CHANGE mail_adress mail_address VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE likes DROP FOREIGN KEY FK_49CA4E7DAB5B2DCA');
        $this->addSql('ALTER TABLE likes DROP FOREIGN KEY FK_49CA4E7D47BCFD73');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA61220EA6');
        $this->addSql('DROP TABLE likes');
        $this->addSql('DROP TABLE posts');
        $this->addSql('ALTER TABLE users CHANGE mail_address mail_adress VARCHAR(255) NOT NULL');
    }
}
