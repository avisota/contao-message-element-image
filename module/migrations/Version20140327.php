<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-image
 * @license    LGPL-3.0+
 * @filesource
 */

namespace DoctrineMigrations\AvisotaMessageElementImage;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20140327 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        if (!$schema->hasTable('orm_avisota_message_content')) {
            return;
        }

        $table = $schema->getTable('orm_avisota_message_content');

        if ($table->hasColumn('singleSRC')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE singleSRC imageSource BLOB DEFAULT NULL COMMENT \'(DC2Type:binaryString)\'');
        }
        if ($table->hasColumn('alt')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE alt imageAlt VARCHAR(255) DEFAULT NULL');
        }
        if ($table->hasColumn('size')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE size imageSize TEXT DEFAULT NULL COMMENT \'(DC2Type:serialized)\'');
        }
        if ($table->hasColumn('caption')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE caption imageCaption VARCHAR(255) DEFAULT NULL');
        }
        if ($table->hasColumn('floating')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE floating imageFloating TEXT DEFAULT NULL COMMENT \'(DC2Type:serialized)\'');
        }
    }

    public function down(Schema $schema)
    {
        if (!$schema->hasTable('orm_avisota_message_content')) {
            return;
        }

        $table = $schema->getTable('orm_avisota_message_content');

        if ($table->hasColumn('imageSource')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE imageSource singleSRC BLOB DEFAULT NULL COMMENT \'(DC2Type:binaryString)\'');
        }
        if ($table->hasColumn('imageAlt')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE imageAlt alt VARCHAR(255) DEFAULT NULL');
        }
        if ($table->hasColumn('imageSize')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE imageSize size TEXT DEFAULT NULL COMMENT \'(DC2Type:serialized)\'');
        }
        if ($table->hasColumn('imageCaption')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE imageCaption caption VARCHAR(255) DEFAULT NULL');
        }
        if ($table->hasColumn('imageFloating')) {
            $this->addSql('ALTER TABLE orm_avisota_message_content CHANGE imageFloating floating TEXT DEFAULT NULL COMMENT \'(DC2Type:serialized)\'');
        }
    }
}
