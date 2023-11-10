// ตรวจสอบความพร้อมก่อนใช้งาน jQuery
$(document).ready(function () {
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

/* ภาพ */
