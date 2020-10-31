</body>
<footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!--   Core JS Files   -->
      <script src="<?php echo base_url('/assets/js/core/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('/assets/js/core/popper.min.js'); ?>"></script>
      <script src="<?php echo base_url('/assets/js/core/bootstrap.min.js'); ?>"></script>
      <script src="<?php echo base_url('/assets/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url('/assets/js/plugins/bootstrap-switch.js'); ?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url('/assets/js/plugins/nouislider.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/plugins/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/plugins/datetimepicker.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/plugins/bootstrap-datepicker.min.js'); ?>"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url('/assets/js/EZView.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/draggable.js'); ?>"></script>
<script src="https://cdn.tiny.cloud/1/dbk87huv68ffs2kkiqeagexb90lhn81tsmnkc2yr92jcx37u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="<?php echo base_url('/assets/alertify.min.js'); ?>"></script>
<script src="https://jquery.com/jquery-2.1.4.min.js"></script> 
<script src="<?php echo base_url('/assets/simply-toast.js'); ?>"></script>
<script>
tinymce.init({
  selector: '.local-upload',
  plugins: 'image code | link ',
  toolbar: 'undo redo | link image | code | link',
  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
  </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function() {
  $('.notification').addClass('notification-hidden');
  openNotification('positive');
});

$('.again').click(function(){
  openNotification('positive');
  setTimeout(closeNotification, 10000);
});


function openNotification(whichNotification) {
  var thisNotification = $('.notification.' + whichNotification);
  thisNotification.removeClass('notification-hidden');
  setTimeout(function() {
    thisNotification.addClass('open');
    var openNotification = $('.notification.open');
    $('.pull').addClass('open');
    openNotification.addClass('show').addClass('open--rot');
    
    setTimeout(function() {
      openNotification.addClass('open--width');
    }, 1250);
    
    setTimeout(function(){
      openNotification.find('.flex-container').addClass('drop-down');
    }, 3000);

    $('body').append('<div class="overlay"></div>');
  }, 50);
}

function closeNotification() {
  var type = $('.notification.open');

  type.find('.drop-down').removeClass('drop-down');
  
  setTimeout(function(){
    type.removeClass('open--width');
  }, 400);
  
  setTimeout(function() {
    type.removeClass('open--rot')
  }, 700);
  setTimeout(function() {
    type.removeClass('show');
  }, 900);
  setTimeout(function() {
    $('.overlay').remove();
    type.removeClass('open');
  }, 1000);
  setTimeout(function() {
    type.addClass('notification-hidden')
  }, 1050);
}
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</footer>