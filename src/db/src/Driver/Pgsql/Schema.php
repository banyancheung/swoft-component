<?php
declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Db\Driver\Pgsql;

use Swoft\Db\Types;

/**
 * Schema
 */
class Schema extends \Swoft\Db\Driver\Schema
{
    /**
     * @var array
     */
    public static $typeMap = [
        'bit'                         => self::TYPE_INTEGER,
        'bit varying'                 => self::TYPE_INTEGER,
        'varbit'                      => self::TYPE_INTEGER,
        'bool'                        => self::TYPE_BOOLEAN,
        'boolean'                     => self::TYPE_BOOLEAN,
        'box'                         => self::TYPE_STRING,
        'circle'                      => self::TYPE_STRING,
        'point'                       => self::TYPE_STRING,
        'line'                        => self::TYPE_STRING,
        'lseg'                        => self::TYPE_STRING,
        'polygon'                     => self::TYPE_STRING,
        'path'                        => self::TYPE_STRING,
        'character'                   => self::TYPE_CHAR,
        'char'                        => self::TYPE_CHAR,
        'bpchar'                      => self::TYPE_CHAR,
        'character varying'           => self::TYPE_STRING,
        'varchar'                     => self::TYPE_STRING,
        'text'                        => self::TYPE_TEXT,
        'bytea'                       => self::TYPE_BINARY,
        'cidr'                        => self::TYPE_STRING,
        'inet'                        => self::TYPE_STRING,
        'macaddr'                     => self::TYPE_STRING,
        'real'                        => self::TYPE_FLOAT,
        'float4'                      => self::TYPE_FLOAT,
        'double precision'            => self::TYPE_DOUBLE,
        'float8'                      => self::TYPE_DOUBLE,
        'decimal'                     => self::TYPE_DECIMAL,
        'numeric'                     => self::TYPE_DECIMAL,
        'money'                       => self::TYPE_MONEY,
        'smallint'                    => self::TYPE_SMALLINT,
        'int2'                        => self::TYPE_SMALLINT,
        'int4'                        => self::TYPE_INTEGER,
        'int'                         => self::TYPE_INTEGER,
        'integer'                     => self::TYPE_INTEGER,
        'bigint'                      => self::TYPE_BIGINT,
        'int8'                        => self::TYPE_BIGINT,
        'oid'                         => self::TYPE_BIGINT, // should not be used. it's pg internal!
        'smallserial'                 => self::TYPE_SMALLINT,
        'serial2'                     => self::TYPE_SMALLINT,
        'serial4'                     => self::TYPE_INTEGER,
        'serial'                      => self::TYPE_INTEGER,
        'bigserial'                   => self::TYPE_BIGINT,
        'serial8'                     => self::TYPE_BIGINT,
        'pg_lsn'                      => self::TYPE_BIGINT,
        'date'                        => self::TYPE_DATE,
        'interval'                    => self::TYPE_STRING,
        'time without time zone'      => self::TYPE_TIME,
        'time'                        => self::TYPE_TIME,
        'time with time zone'         => self::TYPE_TIME,
        'timetz'                      => self::TYPE_TIME,
        'timestamp without time zone' => self::TYPE_TIMESTAMP,
        'timestamp'                   => self::TYPE_TIMESTAMP,
        'timestamp with time zone'    => self::TYPE_TIMESTAMP,
        'timestamptz'                 => self::TYPE_TIMESTAMP,
        'abstime'                     => self::TYPE_TIMESTAMP,
        'tsquery'                     => self::TYPE_STRING,
        'tsvector'                    => self::TYPE_STRING,
        'txid_snapshot'               => self::TYPE_STRING,
        'unknown'                     => self::TYPE_STRING,
        'uuid'                        => self::TYPE_STRING,
        'json'                        => self::TYPE_JSON,
        'jsonb'                       => self::TYPE_JSON,
        'xml'                         => self::TYPE_STRING,
    ];

    /**
     * @var array
     */
    public static $phpMap = [
        'bit'                         => Types::INT,
        'bit varying'                 => Types::INT,
        'varbit'                      => Types::INT,
        'bool'                        => Types::BOOL,
        'boolean'                     => Types::BOOL,
        'box'                         => Types::STRING,
        'circle'                      => Types::STRING,
        'point'                       => Types::STRING,
        'line'                        => Types::STRING,
        'lseg'                        => Types::STRING,
        'polygon'                     => Types::STRING,
        'path'                        => Types::STRING,
        'character'                   => Types::STRING,
        'char'                        => Types::STRING,
        'bpchar'                      => Types::STRING,
        'character varying'           => Types::STRING,
        'varchar'                     => Types::STRING,
        'text'                        => Types::STRING,
        'bytea'                       => Types::STRING,
        'cidr'                        => Types::STRING,
        'inet'                        => Types::STRING,
        'macaddr'                     => Types::STRING,
        'real'                        => Types::FLOAT,
        'float4'                      => Types::STRING,
        'double precision'            => Types::STRING,
        'float8'                      => Types::STRING,
        'decimal'                     => Types::STRING,
        'numeric'                     => Types::STRING,
        'money'                       => Types::STRING,
        'smallint'                    => Types::INT,
        'int2'                        => Types::INT,
        'int4'                        => Types::INT,
        'int'                         => Types::INT,
        'integer'                     => Types::INT,
        'bigint'                      => Types::INT,
        'int8'                        => Types::INT,
        'oid'                         => Types::INT,
        'smallserial'                 => Types::INT,
        'serial2'                     => Types::INT,
        'serial4'                     => Types::INT,
        'serial'                      => Types::INT,
        'bigserial'                   => Types::INT,
        'serial8'                     => Types::INT,
        'pg_lsn'                      => Types::INT,
        'date'                        => Types::STRING,
        'interval'                    => Types::STRING,
        'time without time zone'      => Types::STRING,
        'time'                        => Types::STRING,
        'time with time zone'         => Types::STRING,
        'timetz'                      => Types::STRING,
        'timestamp without time zone' => Types::STRING,
        'timestamp'                   => Types::STRING,
        'timestamp with time zone'    => Types::STRING,
        'timestamptz'                 => Types::STRING,
        'abstime'                     => Types::STRING,
        'tsquery'                     => Types::STRING,
        'tsvector'                    => Types::STRING,
        'txid_snapshot'               => Types::STRING,
        'unknown'                     => Types::STRING,
        'uuid'                        => Types::STRING,
        'json'                        => Types::STRING,
        'jsonb'                       => Types::STRING,
        'xml'                         => Types::STRING,
    ];
}
