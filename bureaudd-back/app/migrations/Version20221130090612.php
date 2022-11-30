<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221130090612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE character_class_character DROP FOREIGN KEY FK_B38816341136BE75');
        $this->addSql('ALTER TABLE character_class_character DROP FOREIGN KEY FK_B3881634B201E281');
        $this->addSql('DROP TABLE character_class_character');
        $this->addSql('ALTER TABLE character_character_class DROP FOREIGN KEY FK_58A5C7C21136BE75');
        $this->addSql('ALTER TABLE character_character_class ADD CONSTRAINT FK_58A5C7C21136BE75 FOREIGN KEY (character_id) REFERENCES `playable_character` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_class_character (character_class_id INT NOT NULL, character_id INT NOT NULL, INDEX IDX_B3881634B201E281 (character_class_id), INDEX IDX_B38816341136BE75 (character_id), PRIMARY KEY(character_class_id, character_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE character_class_character ADD CONSTRAINT FK_B38816341136BE75 FOREIGN KEY (character_id) REFERENCES playable_character (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_class_character ADD CONSTRAINT FK_B3881634B201E281 FOREIGN KEY (character_class_id) REFERENCES character_class (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_character_class DROP FOREIGN KEY FK_58A5C7C21136BE75');
        $this->addSql('ALTER TABLE character_character_class ADD CONSTRAINT FK_58A5C7C21136BE75 FOREIGN KEY (character_id) REFERENCES playable_character (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
