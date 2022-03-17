<?php if( !empty( $show_modal ) ){ ?>
   
   <script>
       $( document ).ready(function() {
           $("#modal-newsletter").modal("show");
       });
   </script>

<?php } ?>


<div class="modal rounded" id='modal-newsletter' tabindex="-1">
  <div class="modal-dialog rounded">
    <div class="modal-content">
     
      <div class="modal-body p-0" align='center'>
            <img class="card-img-top mb-2" src="storage/images/leo-winner.jpg" alt="...">
            <h1 class='mb-3'>Seja muito bem vindo</h1>
            <p class='m-4'>Inscreva-se em nossa newsletter para ficar por dentro da revolução da aprendizagem</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Inscreva-se</button>
      </div>
    </div>
  </div>
</div>







