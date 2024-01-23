<style>
   /* Add custom styles for the popup */
   #mypopup .modal-dialog {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin:0 auto;
      padding:10px;
    }

    #mypopup .modal-content {
      max-width:100%;
    }
    #mypopup .modal-body {
      padding: 0;
    }
    /* Custom close button styles */
    .custom-close-button {
      position: absolute;
      top: 0px;
      right: 0px;
      z-index: 999;
      color: #000; /* Customize the color */
      font-size: 15px; /* Customize the font size */
      cursor: pointer;
      border-radius:0px;
      border:none;
    }
    .custom-close-button:hover{
      background-color: #000;
      color:#fff;
    }
    .modal {
    background-color: rgba(0,0,0,0.6) !important;
}
</style>

 <div id="mypopup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content p-0">           
      <div class="modal-body p-0">
        <button type="button" class="close custom-close-button" data-dismiss="modal">&times;</button>
        <a href="https://www.asianhhm.com/magazine" target="_blank">
          <img src="https://industry.asianhhm.com/images/pop-up/issue-62.jpg" alt="Popup" class="img-fluid rounded border border-white">
        </a>
      </div>          
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
      // Close the popup when the Close button is clicked
      $('.custom-close-button').on('click', function() {
        $('#mypopup').modal('hide');
      });

      // Show the popup only once
      if (sessionStorage.getItem('advertOnce') !== 'true') {
        setTimeout(function() {
          $('#mypopup').modal('show');
        }, 3000);
      }

      $('#mypopup').on('hidden.bs.modal', function() {
        sessionStorage.setItem('advertOnce', 'true');
      });
    });
  </script>
