// ตรวจสอบความพร้อมก่อนใช้งาน jQuery
$(document).ready(function () {
    /**
     *  ! ดึง ที่อยู่
     */
    $("#provinces-id").change(function () {
        var selectedProvinceId = $(this).val();

        // ตรวจสอบว่าเลือก "จังหวัด" ให้ค่าไม่ใช่ค่าเริ่มต้น
        if (selectedProvinceId !== "0") {
            // ใช้ Ajax เรียกเส้นทางใน Laravel เพื่อดึงข้อมูลแขวง/อำเภอ
            $.ajax({
                url: "get-districts/" + selectedProvinceId,
                type: "GET",

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

    // เมื่อเลือก "เขต/ตำบล"
    $("#districts").change(function () {
        var selectedDistrictId = $(this).val();
        // ตรวจสอบว่าเลือก "แขวง/อำเภอ" ให้ค่าไม่ใช่ค่าเริ่มต้น
        if (selectedDistrictId !== "0") {
            $.ajax({
                url: "get-amphures/" + selectedDistrictId,
                type: "GET",
                success: function (res) {
                    // อัปเดตตัวเลือก "เขต/ตำบล"
                    var amphuresSelect = $("#amphures");
                    amphuresSelect.find("option").remove();
                    amphuresSelect.append(
                        $("<option selected disabled>เขต/ตำบล</option>")
                    );

                    $.each(res, function (index, data) {
                        console.log("data", data.zip_code);
                        amphuresSelect.append(
                            $("<option>", {
                                value: data.id,
                                text: data.name_th,
                            })
                        );
                        if (data.zip_code) {
                            document.getElementById("zip_code").value =
                                data.zip_code;
                        }
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error);
                },
            });
        }
    });

    /**
     *  ! save ภาพ หน้าจอ
     */
    const captureButton = document.getElementById("captureButton");
    const captureContainer = document.getElementById("container");
    const captureSave = document.getElementById("captureButton");
    const captureSaveLink = document.getElementById("link-url");
    const captureBack = document.getElementById("back-home");

    captureButton.addEventListener("click", () => {
        captureContainer.style.border = "3px solid var(--primary_200)";
        captureContainer.style.padding = "16px";
        captureContainer.style.maxWidth = "700px";
        captureSave.style.display = "none";
        captureSaveLink.style.display = "none";
        captureBack.style.visibility = "hidden";

        /*      captureSaveLink.style.padding = "0" */
        html2canvas(document.getElementById("container")).then((canvas) => {
            const dataURL = canvas.toDataURL("image/png");

            const downloadLink = document.createElement("a");
            downloadLink.href = dataURL;
            downloadLink.download = "webpage.png";
            downloadLink.click();
        });
        captureContainer.style.border = "none";
        captureContainer.style.padding = "0px";
        captureContainer.style.maxWidth = "100%";
        captureSave.style.display = "block";
        captureSaveLink.style.display = "block";
        captureBack.style.visibility = "visible";
    });

    // ตัวอย่างอื่น ๆ ของโค้ด JavaScript
});
