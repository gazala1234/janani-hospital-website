<?php
include('header.php');
?>

<body>
    <div class="container-xxl pt-4">
        <div class="container">
            <h1 class="text-center">Gallery</h1>
            <div class="gallery">
                <?php
                $images = [];
                for ($i = 1; $i <= 17; $i++) {
                    $images[] = "../img/gallery/img$i.jpeg";
                    echo "<a href=\"#lightbox$i\"><img src=\"../img/gallery/img$i.jpeg\" alt=\"Image $i\" /></a>";
                }
                ?>
            </div>

            <?php
            foreach ($images as $index => $image) {
                $lightboxIndex = $index + 1;
                echo "
            <div id=\"lightbox$lightboxIndex\" class=\"lightbox\">
                <span class=\"close-btn\" onclick=\"window.location='#';\">&times;</span>
                <img src=\"$image\" alt=\"Image $lightboxIndex\" />
                <div class=\"arrow left\" onclick=\"changeImage(-1);\">&#9664;</div>
                <div class=\"arrow right\" onclick=\"changeImage(1);\">&#9654;</div>
            </div>";
            }
            ?>
        </div>
    </div>

    <script>
        const images = [
            <?php
            for ($i = 1; $i <= 17; $i++) {
                echo "\"../img/gallery/img$i.jpeg\"";
                if ($i < 17) {
                    echo ",";
                }
            }
            ?>
        ];

        function changeImage(direction) {
            const lightbox = document.querySelector(".lightbox:target img");
            const currentSrc = lightbox.src.split('/').pop();
            const currentIndex = images.findIndex(img => img.endsWith(currentSrc)); // Get the current image index

            let newIndex = currentIndex + direction;

            if (newIndex < 0) {
                newIndex = images.length - 1; 
            } else if (newIndex >= images.length) {
                newIndex = 0;
            }

            lightbox.src = images[newIndex];
        }
    </script>
</body>

<?php
include('footer.php');
?>