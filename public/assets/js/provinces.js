// ตรวจสอบความพร้อมก่อนใช้งาน jQuery
$(document).ready(function () {
    $("#provinces-id").change(function () {
        var selectedProvinceId = $(this).val();

        // ตรวจสอบว่าเลือก "จังหวัด" ให้ค่าไม่ใช่ค่าเริ่มต้น
        if (selectedProvinceId !== "0") {
            // ใช้ Ajax เรียกเส้นทางใน Laravel เพื่อดึงข้อมูลแขวง/อำเภอ
            $.ajax({
                url: "get-districts/" + selectedProvinceId, // เปลี่ยนชื่อเส้นทางตามที่คุณตั้งค่าใน Laravel
                type: "GET", // หรือ "GET" ขึ้นกับการกำหนดค่าใน Laravel

                success: function (res) {
                    // อัปเดตตัวเลือก "แขวง/อำเภอ"
                    var districtsSelect = $("#districts");
                    districtsSelect.find("option").remove();
                    districtsSelect.append(
                        $("<option selected disabled>แขวง/อำเภอ</option>")
                    );

                    $.each(res, function (index, district) {
                        console.log("district", district);

                        districtsSelect.append(
                            $("<option>", {
                                value: district.id,
                                text: district.name_th,
                            })
                        );
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error);
                },
            });
        }
    });

    // เมื่อเลือก "แขวง/อำเภอ"
    $("#districts").change(function () {
        var selectedDistrictId = $(this).val();

        // ตรวจสอบว่าเลือก "แขวง/อำเภอ" ให้ค่าไม่ใช่ค่าเริ่มต้น
        if (selectedDistrictId !== "0") {
            // ใช้ Ajax เรียกเส้นทางใน Laravel เพื่อดึงข้อมูลเขต/ตำบล
            $.ajax({
                url: "get-amphures/" + selectedDistrictId, // เปลี่ยนชื่อเส้นทางตามที่คุณตั้งค่าใน Laravel
                type: "GET", // หรือ "GET" ขึ้นกับการกำหนดค่าใน Laravel
                success: function (res) {
                    // อัปเดตตัวเลือก "เขต/ตำบล"
                    var amphuresSelect = $("#amphures");
                    amphuresSelect.find("option").remove();
                    amphuresSelect.append(
                        $("<option selected disabled>เขต/ตำบล</option>")
                    );

                    $.each(res, function (index, data) {
                        amphuresSelect.append(
                            $("<option>", {
                                value: data.id,
                                text: data.name_th,
                            })
                        );
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error);
                },
            });
        }
    });

    // ตัวอย่างอื่น ๆ ของโค้ด JavaScript
});
