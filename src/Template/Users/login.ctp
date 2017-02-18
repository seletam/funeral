<style type="text/css">


    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

</style>    
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
		<div class="row">
		 <div class="col-sm-12">
            <div class="model model-md">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Login</h3>
                    </div>
                    <div class="modal-body">
                        <?= $this->Form->create(null, array('class' => 'form-group')); ?>
                        <?= $this->Form->input('username', ["class" => "form-control", "placeholder" => "Username"]); ?>
                        <?= $this->Form->input('password', ["class" => "form-control", "placeholder" => "Password", "autocomplete" => true]); ?>
                    </div>
                    
                    <div class="modal-footer">
                        <?= $this->Form->button('Login', array('class' => 'btn btn-large btn-primary')); ?>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
                <div class="col-md-4"></div>
            </div>
           </div>
        </div>
      </div>
    </div>
</div>
