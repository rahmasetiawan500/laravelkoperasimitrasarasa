<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->string('tempat');
            $table->date('lahir');
            $table->string('pekerjaan');
            $table->string('notelp');
            $table->text('alamat');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
