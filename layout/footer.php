<!-- Footer -->
    <div class="footer"> &copy; <?php  echo ( date('Y')); ?>
    </div>

    <script>
      // Background Image Slider Script
      const images = document.querySelectorAll(".slider img");
      let currentIndex = 0;

      function changeImage() {
        images[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add("active");
      }

      setInterval(changeImage, 5000); // Change image every 5 seconds
    </script>
</html>
