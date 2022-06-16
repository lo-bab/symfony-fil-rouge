<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220616080749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipement_search (id INT AUTO_INCREMENT NOT NULL, lave_linge TINYINT(1) DEFAULT NULL, lave_vaisselle TINYINT(1) DEFAULT NULL, climatisation TINYINT(1) DEFAULT NULL, television TINYINT(1) DEFAULT NULL, terrasse TINYINT(1) DEFAULT NULL, barbecue TINYINT(1) DEFAULT NULL, piscine_privee TINYINT(1) DEFAULT NULL, piscine_partagee TINYINT(1) DEFAULT NULL, tennis TINYINT(1) DEFAULT NULL, ping_pong TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipement_search');
    }
}
