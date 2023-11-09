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
        Schema::create('rent_sell_home_details', function (Blueprint $table) {
            $table->id();
            $table->string('building_name')->nullable()->comment('ชื่ออาคาร/สถานที่');
            $table->string('rent_sell')->nullable()->comment('เลือก เช่า ขาย เช่า/ขาย');
            $table->string('rental_price')->nullable()->comment('ราคาเช่า');
            $table->string('sell_price')->nullable()->comment('ราคาขาย');
            $table->string('url_gps')->nullable()->comment('url_gps');
            $table->string('time_arrive')->nullable()->comment('ระยะเวลาถึงสถานีรถไฟ');
            $table->string('train_name')->nullable()->comment('ชื่อสถานีรถไฟ');
            $table->string('bedroom')->nullable()->comment('จำนวนห้องนอน');
            $table->string('bathroom')->nullable()->comment('จำนวนห้องน้ำ');
            $table->string('room_width')->nullable()->comment('ความกว้างห้อง (ตร.ม)');
            $table->string('studio')->nullable()->comment('สตูดิโอ');
            $table->string('number_floors')->nullable()->comment('จำนวนชั้น');
            $table->string('decoration')->nullable()->comment('ของตกเเต่ง');
            $table->text('address')->nullable()->comment('ที่อยู่');
            $table->string('provinces')->nullable()->comment('จังหวัด');
            $table->string('districts')->nullable()->comment('แขวง/ อำเภอ');
            $table->string('amphures')->nullable()->comment('เขต/ ตำบล');
            $table->string('zip_code')->nullable()->comment('รหัสไปรษณีย์');
            $table->text('details')->nullable()->comment('รายละเอียด');
            $table->string('minimum_rent')->nullable()->comment('เช่าขั้นต่ำ  (กี่เดือน)');
            $table->string('deposit')->nullable()->comment('เงินประกัน (กี่เดือน)');
            $table->string('cash_pledge')->nullable()->comment('เงินมัดจำ  (กี่เดือน) ');
            $table->string('advance_rent')->nullable()->comment('ค่าเช่าล่วงหน้า )');
            $table->string('reservation_money')->nullable()->comment(' เงินจอง  (เช่า)');
            $table->string('down_payment')->nullable()->comment('เงินดาวน์ (ขาย) ');
            $table->string('down_payment_installments')->nullable()->comment('ผ่อนดาวน์ได้/ไม่ได้ (ขาย) ');
            $table->string('installments')->nullable()->comment('ผ่อนได้ กี่งวด (ขาย) ');
            $table->string('each_installment')->nullable()->comment('งวดละ (ขาย) ');
            $table->string('kitchen')->nullable()->comment('ห้องครัว');
            $table->string('bed')->nullable()->comment('เตียง');
            $table->string('fitness')->nullable()->comment('ฟิตเนส');
            $table->string('wardrobe')->nullable()->comment('ตู้เสื้อผ้า');
            $table->string('parking')->nullable()->comment('ที่จอดรถ');
            $table->string('air_conditioner')->nullable()->comment('เครื่องปรับอากาศ');
            $table->json('image')->nullable()->comment('ภาพ');
            $table->string('make_appointment_location')->nullable()->comment('นัดดูสถานที่');
            $table->string('send_customers')->nullable()->comment('ส่งลูกค้า');
            $table->string('ask_more')->nullable()->comment('ถามเพิ่มเติม');
            $table->string('contact_number')->nullable()->comment('เบอร์ติดต่อ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_sell_home_details');
    }

};