
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/text-editor.js"></script>
<script type="text/javascript">
   function aos_init() {
      AOS.init({
         duration: 1000,
         easing: "ease-in-out",
         once: true,
         mirror: false
      });
   }
   window.addEventListener('load', () => {
      aos_init();
   });
</script>
<script>
   $(".caption").click(function () {
      var $body = $(this).closest(".module").find(".collapse-body");
      var $icon = $body.siblings('.caption').find('.icon-roll');
      $body.slideToggle(200);
      if ($body.css("display") === 'block' && !($icon.hasClass("rotate"))) {
         $icon.removeClass('rev-rotate').addClass('rotate').addClass('text-danger').removeClass('text-dark');
      }
      else {
         $icon.removeClass('rotate').addClass('rev-rotate').addClass('text-dark').removeClass('text-danger');
      }
   });


   /* Set the width of the side navigation to 250px */
   function openNav() {
      document.getElementById("mySidenav").style.width = "400px";
   }

   /* Set the width of the side navigation to 0 */
   function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
   }
</script>
<script type="text/javascript">
   document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (event) => {
          inputElement.click(); /*clicking on input element whenever the dropzone is clicked so file browser is opened*/
        });

        inputElement.addEventListener("change", (event) => {
          if (inputElement.files.length) {
            updateThumbnail(dropZoneElement, inputElement.files[0]);
          }
        });

        dropZoneElement.addEventListener("dragover", (event) => {
          event.preventDefault(); /*this along with prevDef in drop event prevent browser from opening file in a new tab*/
          dropZoneElement.classList.add("drop-zone--over");
        });
        ["dragleave", "dragend"].forEach((type) => {
          dropZoneElement.addEventListener(type, (event) => {
            dropZoneElement.classList.remove("drop-zone--over");
          });
        });
        dropZoneElement.addEventListener("drop", (event) => {
          event.preventDefault();
          console.log(
            event.dataTransfer.files
          ); /*if you console.log only event and check the same data location, you won't see the file due to a chrome bug!*/
          if (event.dataTransfer.files.length) {
            inputElement.files =
              event.dataTransfer.files; /*asigns dragged file to inputElement*/

            updateThumbnail(
              dropZoneElement,
              event.dataTransfer.files[0]
            ); /*thumbnail will only show first file if multiple files are selected*/
          }
          dropZoneElement.classList.remove("drop-zone--over");
        });
      });
      function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(
          ".drop-zone__thumb"
        );
        /*remove text prompt*/
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
          dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        /*first time there won't be a thumbnailElement so it has to be created*/
        if (!thumbnailElement) {
          thumbnailElement = document.createElement("div");
          thumbnailElement.classList.add("drop-zone__thumb");
          dropZoneElement.appendChild(thumbnailElement);
        }
        thumbnailElement.dataset.label =
          file.name; /*takes file name and sets it as dataset label so css can display it*/

        /*show thumbnail for images*/
        if (file.type.startsWith("image/")) {
          const reader = new FileReader(); /*lets us read files to data URL*/
          reader.readAsDataURL(file); /*base 64 format*/
          reader.onload = () => {
            thumbnailElement.style.backgroundImage = `url('${reader.result}')`; /*asynchronous call. This function runs once reader is done reading file. reader.result is the base 64 format*/
            thumbnailElement.style.backgroundPosition = "center";
          };
        } else {
          thumbnailElement.style.backgroundImage = null; /*plain background for non image type files*/
        }
      }
</script>


<script type="text/javascript">
   var swiper = new Swiper(".mySwiper", {
     pagination: {
       el: ".swiper-pagination",
       clickable: true,
       renderBullet:true
     },
   });
</script>
