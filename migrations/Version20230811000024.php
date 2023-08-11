<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811000024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE banner ADD image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE banner ADD image_original_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE banner ADD image_mime_type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE banner ADD image_size INT DEFAULT NULL');
        $this->addSql('ALTER TABLE banner ADD image_dimensions TEXT DEFAULT NULL');
        $this->addSql('COMMENT ON COLUMN banner.image_dimensions IS \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE banner DROP image_name');
        $this->addSql('ALTER TABLE banner DROP image_original_name');
        $this->addSql('ALTER TABLE banner DROP image_mime_type');
        $this->addSql('ALTER TABLE banner DROP image_size');
        $this->addSql('ALTER TABLE banner DROP image_dimensions');
    }
}
