<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190724195454 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, birthday DATE NOT NULL, phone VARCHAR(10) DEFAULT NULL, mobile VARCHAR(10) DEFAULT NULL, street VARCHAR(100) NOT NULL, additional_adress VARCHAR(255) DEFAULT NULL, postal_code VARCHAR(5) NOT NULL, country VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, driving_license VARCHAR(30) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experiences (id INT AUTO_INCREMENT NOT NULL, position VARCHAR(100) NOT NULL, company VARCHAR(100) NOT NULL, started_at DATE NOT NULL, ended_at DATE DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hobbies (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, type VARCHAR(100) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE languages (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(50) NOT NULL, grade VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technologies (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, type VARCHAR(100) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(100) NOT NULL, degree VARCHAR(100) DEFAULT NULL, started_at DATE DEFAULT NULL, ended_at DATE DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE experiences');
        $this->addSql('DROP TABLE hobbies');
        $this->addSql('DROP TABLE languages');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE technologies');
        $this->addSql('DROP TABLE training');
    }
}
