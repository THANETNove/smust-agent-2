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


    var saveBtn = document.getElementById('save-image-btn');

    saveBtn.addEventListener('click', function() {
        saveImage(img.src);
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

        var popup = document.getElementById('imagePopup');
        popup.style.display = 'flex';
        var popupMediaContainer = document.getElementById('popupMediaContainer');
        popupMediaContainer.innerHTML = '';

        var assetUrl = "{{ asset('img/product') }}";
        var img = document.createElement('img');
        img.src = assetUrl + '/' + mediaItems[index];
        popupMediaContainer.appendChild(img);


    }

    function saveImage(imageUrl) {
        var downloadLink = document.createElement('a');

        // Set the href attribute to the image URL
        downloadLink.href = imageUrl;

        // Set the download attribute to specify the default file name
        downloadLink.download = 'image.jpg';

        // Append the anchor element to the document
        document.body.appendChild(downloadLink);

        // Trigger a click event on the anchor element
        downloadLink.click();

        // Remove the anchor element from the document
        document.body.removeChild(downloadLink);
    }
</script>
