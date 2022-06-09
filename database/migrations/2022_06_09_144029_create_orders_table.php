<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->integer('userId')->comment('收件者id');
        $table->json('product')->comment('產品清單');
        $table->string('name', 20)->comment('收件人姓名');
        $table->integer('payment')->comment('付款方式 0:ATM轉帳');
        $table->boolean('paymentStatus')->comment('付款狀態 0:未付款 1:已付款');
        $table->string('address', 100)->comment('收件地址');
        $table->string('phone', 20)->comment('收件人電話');
        $table->integer('totalPrice')->comment('總額');
        $table->json('orderRecord')->comment('訂單紀錄');
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
        Schema::dropIfExists('orders');
    }
};
