<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('radcheck', function (Blueprint $table) {
//            id int(11) unsigned NOT NULL auto_increment,
            $table->id();
//            username varchar(64) NOT NULL default '',
            $table->string('username', 64)->default('');
//            attribute varchar(64)  NOT NULL default '',
            $table->string('attribute', 64)->default('');
//            op char(2) NOT NULL default '==',
            $table->string('op', 2)->default('==');
//            value varchar(253) NOT NULL default '',
            $table->string('value', 253)->default('');
//            PRIMARY KEY(id),
//            KEY username(username(32))
            $table->timestamps();
        });

        Schema::create('radacct', function (Blueprint $table) {
//          radacctid bigint(21) NOT NULL auto_increment,
            $table->increments('radacctid');
//          acctsessionid varchar(64) NOT NULL default '',
            $table->string('acctsessionid', 32)->default('');
//          acctuniqueid varchar(32) NOT NULL default '',
            $table->string('acctuniqueid',32)->default('');
//          username varchar(64) NOT NULL default '',
            $table->string('username',64)->default('');
//          realm varchar(64) default '',
            $table->string('realm',64)->default('');
//          nasipaddress varchar(15) NOT NULL default '',
            $table->string('nasipaddress',64)->default('');
//          nasportid varchar(32) default NULL,
            $table->string('nasportid',32)->nullable()->default('');
//          nasporttype varchar(32) default NULL,
            $table->string('nasporttype',32)->nullable()->default('');
//          acctstarttime datetime NULL default NULL,
            $table->dateTime('acctstarttime')->nullable()->default(null);
//          acctupdatetime datetime NULL default NULL,
            $table->dateTime('acctupdatetime')->nullable()->default(null);
//  acctstoptime datetime NULL default NULL,
//  acctinterval int(12) default NULL,
//  acctsessiontime int(12) unsigned default NULL,
//  acctauthentic varchar(32) default NULL,
//  connectinfo_start varchar(128) default NULL,
//  connectinfo_stop varchar(128) default NULL,
//  acctinputoctets bigint(20) default NULL,
//  acctoutputoctets bigint(20) default NULL,
//  calledstationid varchar(50) NOT NULL default '',
//  callingstationid varchar(50) NOT NULL default '',
//  acctterminatecause varchar(32) NOT NULL default '',
//  servicetype varchar(32) default NULL,
//  framedprotocol varchar(32) default NULL,
//  framedipaddress varchar(15) NOT NULL default '',
//  framedipv6address varchar(45) NOT NULL default '',
//  framedipv6prefix varchar(45) NOT NULL default '',
//  framedinterfaceid varchar(44) NOT NULL default '',
//  delegatedipv6prefix varchar(45) NOT NULL default '',
//  class varchar(64) default NULL,
//  PRIMARY KEY (radacctid),
//  UNIQUE KEY acctuniqueid (acctuniqueid),
//  KEY username (username),
//  KEY framedipaddress (framedipaddress),
//  KEY framedipv6address (framedipv6address),
//  KEY framedipv6prefix (framedipv6prefix),
//  KEY framedinterfaceid (framedinterfaceid),
//  KEY delegatedipv6prefix (delegatedipv6prefix),
//  KEY acctsessionid (acctsessionid),
//  KEY acctsessiontime (acctsessiontime),
//  KEY acctstarttime (acctstarttime),
//  KEY acctinterval (acctinterval),
//  KEY acctstoptime (acctstoptime),
//  KEY nasipaddress (nasipaddress),
//  KEY class (class)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radcheck');
        Schema::dropIfExists('radacct');
    }
};
