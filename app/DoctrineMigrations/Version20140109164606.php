<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20140109164606 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
    	$this->addSql("ALTER TABLE  `upload_files` ADD  `isPublic` TINYINT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '是否公开文件' AFTER  `storage`");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}