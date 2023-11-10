<script>
    var currentMedia = 0;
    document.querySelectorAll('.popup-trigger').forEach(function(element) {
        element.addEventListener('click', function() {
            openPopup(parseInt(element.getAttribute('data-index')));
        });
    });

    function openPopup(index) {
        console.log("aaa", index);
        currentMedia = index;
        showMedia(index);

        var popup = document.getElementById('imagePopup');
        popup.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        var popup = document.getElementById('imagePopup');
        popup.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    function changeMedia(direction) {
        currentMedia += direction;
        showMedia(currentMedia);
    }


    // กำหนด event listener ไว้นอกฟังก์ชัน showMedia
    var saveBtn = document.getElementById('save-image-btn');
    saveBtn.addEventListener('click', function() {
        if (img) {
            saveImage(img.src);
        } else {
            console.error('Image not defined.');
        }
    });

    function showMedia(index) {
        var mediaItems = {!! json_encode($imgUrl) !!};

        var prevBtn = document.getElementById("prev-btn");
        var nextBtn = document.getElementById("next-btn");
        if (index >= mediaItems.length - 1) {
            nextBtn.style.display = "none";
        } else {
            nextBtn.style.display = "block";
        }
        if (index < 1) {
            prevBtn.style.display = "none";
        } else {
            prevBtn.style.display = "block";
        }

        var popup = document.getElementById('imagePopup');
        var popupImage = document.getElementById('popupImage');

        popup.style.display = 'flex';
        var popupMediaContainer = document.getElementById('popupMediaContainer');
        popupMediaContainer.innerHTML = '';

        var assetUrl = "{{ asset('img/product') }}";
        img = document.createElement('img'); // ตัวแปร img ต้องเป็นตัวแปรที่ถูกสร้างใน scope ที่ถูกต้อง
        img.src = assetUrl + '/' + mediaItems[index];
        popupMediaContainer.appendChild(img);
    }


    function saveImage(imageUrl) {
        var downloadLink = document.createElement('a');
        downloadLink.href = imageUrl;
        downloadLink.download = 'image.jpg';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    }
</script>
