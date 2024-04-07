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
        Schema::disableForeignKeyConstraints();
        $users = DB::table('users')->orderBy('id')->get();
$newId = 1;
foreach ($users as $user) {
    DB::table('users')->where('id', $user->id)->update(['id' => $newId]);
    $newId++;
}
Schema::enableForeignKeyConstraints();


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
