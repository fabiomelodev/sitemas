<?php

use App\Models\Customer;
use App\Models\Domain;
use App\Models\Plan;
use App\Models\Template;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('step_current')->nullable();
            $table->string('payment_status')->default('pending');
            $table->foreignIdFor(Customer::class)->nullable();
            $table->foreignIdFor(Domain::class)->nullable();
            $table->foreignIdFor(Plan::class)->nullable();
            $table->foreignIdFor(Template::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
