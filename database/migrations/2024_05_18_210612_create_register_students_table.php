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
        Schema::create('register_students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('number_GOV')->comment("رقم الوطني")->unique();
            $table->string('number_Rigstration')->comment("رقم القيد")->unique();
            $table->string('number_ID')->comment("رقم الهويخ")->unique();
            $table->enum("genders", ["ذكر","انثئ"])->default("ذكر");
            $table->string('nationality')->comment(" الجنسيه");
            $table->string('address')->comment("الاقامه مدينه ومنطقه");
            $table->string('name_mather');
            $table->string('nationality_mather')->comment(" الجنسيه الام");
            $table->string('img_birth')->comment(" صوره شهاده الميلاد");
            $table->string('img_hith_level')->comment("صوره شهاده الثانويه ");
            $table->string('type_s')->comment("نوع الشهاده  ");
            $table->double('rate')->comment("نسبه الثنويه");
            $table->string('number_phone');
            $table->enum("type_blood", ["A+","A-","B+","B-","O+","O-","AB+","AB-",])->default("O-");
            $table->enum("type_hith_level", ["أدبي","علمي"])->default("علمي");
            $table->enum("type_RR", ["انتساب","نظامي"])->default("نظامي");
            $table->enum("status_regster", ["مرفوض","مقبول","انتظر"])->default("انتظر");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_students');
    }
};
