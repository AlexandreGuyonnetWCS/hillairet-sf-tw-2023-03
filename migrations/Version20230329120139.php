<?php
// phpcs:ignoreFile
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329120139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_image (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, INDEX IDX_2D0E4B1612469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_image ADD CONSTRAINT FK_2D0E4B1612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category DROP image');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_image DROP FOREIGN KEY FK_2D0E4B1612469DE2');
        $this->addSql('DROP TABLE category_image');
        $this->addSql('ALTER TABLE category ADD image VARCHAR(255) DEFAULT NULL');
    }
}
