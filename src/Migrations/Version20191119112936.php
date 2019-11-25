<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191119112936 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_42C8495554177093');
        $this->addSql('DROP INDEX IDX_42C8495519EB6921');
        $this->addSql('CREATE TEMPORARY TABLE __temp__reservation AS SELECT id, client_id, room_id, begin_date, end_date, confirmed FROM reservation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('CREATE TABLE reservation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_id INTEGER NOT NULL, room_id INTEGER NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, confirmed BOOLEAN NOT NULL, CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_42C8495554177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO reservation (id, client_id, room_id, begin_date, end_date, confirmed) SELECT id, client_id, room_id, begin_date, end_date, confirmed FROM __temp__reservation');
        $this->addSql('DROP TABLE __temp__reservation');
        $this->addSql('CREATE INDEX IDX_42C8495554177093 ON reservation (room_id)');
        $this->addSql('CREATE INDEX IDX_42C8495519EB6921 ON reservation (client_id)');
        $this->addSql('DROP INDEX IDX_9474526C54177093');
        $this->addSql('DROP INDEX IDX_9474526C19EB6921');
        $this->addSql('CREATE TEMPORARY TABLE __temp__comment AS SELECT id, client_id, room_id, commentary, grade FROM comment');
        $this->addSql('DROP TABLE comment');
        $this->addSql('CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_id INTEGER NOT NULL, room_id INTEGER NOT NULL, commentary CLOB NOT NULL COLLATE BINARY, grade INTEGER NOT NULL, CONSTRAINT FK_9474526C19EB6921 FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9474526C54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO comment (id, client_id, room_id, commentary, grade) SELECT id, client_id, room_id, commentary, grade FROM __temp__comment');
        $this->addSql('DROP TABLE __temp__comment');
        $this->addSql('CREATE INDEX IDX_9474526C54177093 ON comment (room_id)');
        $this->addSql('CREATE INDEX IDX_9474526C19EB6921 ON comment (client_id)');
        $this->addSql('DROP INDEX IDX_729F519B7E3C61F9');
        $this->addSql('DROP INDEX IDX_729F519B98260155');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT id, region_id, owner_id, summary, description, capacity, superficy, price, address FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, region_id INTEGER NOT NULL, owner_id INTEGER NOT NULL, summary CLOB NOT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, capacity INTEGER NOT NULL, superficy DOUBLE PRECISION DEFAULT NULL, price DOUBLE PRECISION NOT NULL, address VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_729F519B98260155 FOREIGN KEY (region_id) REFERENCES region (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_729F519B7E3C61F9 FOREIGN KEY (owner_id) REFERENCES owner (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO room (id, region_id, owner_id, summary, description, capacity, superficy, price, address) SELECT id, region_id, owner_id, summary, description, capacity, superficy, price, address FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE INDEX IDX_729F519B7E3C61F9 ON room (owner_id)');
        $this->addSql('CREATE INDEX IDX_729F519B98260155 ON room (region_id)');
        $this->addSql('DROP INDEX IDX_B9D87FBB54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__unavailable_period AS SELECT id, room_id, begin_date, end_date FROM unavailable_period');
        $this->addSql('DROP TABLE unavailable_period');
        $this->addSql('CREATE TABLE unavailable_period (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, CONSTRAINT FK_B9D87FBB54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO unavailable_period (id, room_id, begin_date, end_date) SELECT id, room_id, begin_date, end_date FROM __temp__unavailable_period');
        $this->addSql('DROP TABLE __temp__unavailable_period');
        $this->addSql('CREATE INDEX IDX_B9D87FBB54177093 ON unavailable_period (room_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_9474526C19EB6921');
        $this->addSql('DROP INDEX IDX_9474526C54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__comment AS SELECT id, client_id, room_id, commentary, grade FROM comment');
        $this->addSql('DROP TABLE comment');
        $this->addSql('CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_id INTEGER NOT NULL, room_id INTEGER NOT NULL, commentary CLOB NOT NULL, grade INTEGER NOT NULL)');
        $this->addSql('INSERT INTO comment (id, client_id, room_id, commentary, grade) SELECT id, client_id, room_id, commentary, grade FROM __temp__comment');
        $this->addSql('DROP TABLE __temp__comment');
        $this->addSql('CREATE INDEX IDX_9474526C19EB6921 ON comment (client_id)');
        $this->addSql('CREATE INDEX IDX_9474526C54177093 ON comment (room_id)');
        $this->addSql('DROP INDEX IDX_42C8495519EB6921');
        $this->addSql('DROP INDEX IDX_42C8495554177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__reservation AS SELECT id, client_id, room_id, begin_date, end_date, confirmed FROM reservation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('CREATE TABLE reservation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_id INTEGER NOT NULL, room_id INTEGER NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, confirmed BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO reservation (id, client_id, room_id, begin_date, end_date, confirmed) SELECT id, client_id, room_id, begin_date, end_date, confirmed FROM __temp__reservation');
        $this->addSql('DROP TABLE __temp__reservation');
        $this->addSql('CREATE INDEX IDX_42C8495519EB6921 ON reservation (client_id)');
        $this->addSql('CREATE INDEX IDX_42C8495554177093 ON reservation (room_id)');
        $this->addSql('DROP INDEX IDX_729F519B98260155');
        $this->addSql('DROP INDEX IDX_729F519B7E3C61F9');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT id, region_id, owner_id, summary, description, capacity, superficy, price, address FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, region_id INTEGER NOT NULL, owner_id INTEGER NOT NULL, summary CLOB NOT NULL, description CLOB DEFAULT NULL, capacity INTEGER NOT NULL, superficy DOUBLE PRECISION DEFAULT NULL, price DOUBLE PRECISION NOT NULL, address VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO room (id, region_id, owner_id, summary, description, capacity, superficy, price, address) SELECT id, region_id, owner_id, summary, description, capacity, superficy, price, address FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE INDEX IDX_729F519B98260155 ON room (region_id)');
        $this->addSql('CREATE INDEX IDX_729F519B7E3C61F9 ON room (owner_id)');
        $this->addSql('DROP INDEX IDX_B9D87FBB54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__unavailable_period AS SELECT id, room_id, begin_date, end_date FROM unavailable_period');
        $this->addSql('DROP TABLE unavailable_period');
        $this->addSql('CREATE TABLE unavailable_period (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO unavailable_period (id, room_id, begin_date, end_date) SELECT id, room_id, begin_date, end_date FROM __temp__unavailable_period');
        $this->addSql('DROP TABLE __temp__unavailable_period');
        $this->addSql('CREATE INDEX IDX_B9D87FBB54177093 ON unavailable_period (room_id)');
    }
}
