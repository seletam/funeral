<div class="container">
	    <div class="row form-group">
            <div class="col-md-10">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">Personal details</p>
                    </a></li>
                    <li class="disabled"><a href="#step-2">
                        <h4>Step 2</h4>
                        <p class="list-group-item-text">Address & contacts</p>
                    </a></li>
                    <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">Dependants</p>
                    </a></li>
					<li class="disabled"><a href="#step-4">
                        <h4 class="list-group-item-heading">Step 4</h4>
                        <p class="list-group-item-text">Additional members</p>
                    </a></li>
                    <li class="disabled"><a href="#step-5">
                        <h4 class="list-group-item-heading">Step 5</h4>
                        <p class="list-group-item-text">Complete</p>
                    </a></li>    
                </ul>
            </div>
	    </div>
    </div>	

<form class="container">

	  			
    <div class="row setup-content" id="step-1">
		<div class="row">
	  				<div class="col-md-10">
	  					<div class="content-box-header">
		  					<div class="panel-title">Inline Form</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
			  				<form class="form-inline" role="form">
							
								<?= $this->Form->create($holder) ?>
                 <?php
            echo $this->Form->input('title', ['class' => 'form-control']);
            echo $this->Form->input('first_names', ['class' => 'form-control']);
            echo $this->Form->input('surname', ['class' => 'form-control']);
            echo $this->Form->input('idnumber', ['class' => 'form-control']);
            echo $this->Form->input('dob', ['empty' => true]);
            echo $this->Form->input('package', ['class' => 'form-control']);
            echo $this->Form->input('premium', ['class' => 'form-control']);
            //echo $this->Form->input('creation_date');
            //echo $this->Form->input('modified_date');
        ?>
    <?= $this->Form->button('Continue', ['id'=>'activate-step-2', 'class' => "btn btn-primary btn-md"]) ?>
    <?= $this->Form->end() ?>
						</div>
	  				</div>
	  			</div>
                <ul class="pager wizard">
										<!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
										<!--<li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>-->
										<li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
									  	<li class="next"><a href="javascript:void(0);">Next</a></li>
									</ul>
			<!-- </form> -->
    
	</div>

</form>

<form class="container">

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-10 well">
                <h3 class="text-center"> STEP 2</h3>
                
<!--<form>-->
    <?= $this->Form->create($addres) ?>
        <?php
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
            echo $this->Form->input('line_1');
            echo $this->Form->input('line_2');
            echo $this->Form->input('line_3');
            echo $this->Form->input('city');
            echo $this->Form->input('code');
        ?>
    <?= $this->Form->button('Continue', ['id'=>"activate-step-3", 'class' => "btn btn-primary btn-md"]) ?>
    <?= $this->Form->end() ?>

<!--</form>--> 
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-10 well text-center">
                <h3 class="text-center"> STEP 3</h3>
                
<!--<form>-->     
		    <div class="col-md-10 column">
			    <table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Names
						</th>
						<th class="text-center">
							Surname
						</th>
						<th class="text-center">
							ID Number
						</th>
						
						<th class="text-center">
							Local
						</th>
											
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
						<input type="text" name='name0'  placeholder='Name' class="form-control"/>
						</td>
						<td>
						<input type="text" name='surname0' placeholder='Surname' class="form-control"/>
						</td>
						<td>
						<input type="text" name='idnumber' placeholder='IDNumber' class="form-control"/>
						</td>
						<td>
                        <select type="text" name="local" class="form-control">
                            <option name="male" value="0">Yes</option>
                            <option name="Female" value="1">No</option>
                        </select>
                        </td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			    </table>
		    </div>
	    </div>
	    <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
    </div>

<!--</form>--> 
                
            </div>
        </div>
    </div>

</form>

<form class="container">
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-10 well text-center">
                <h3 class="text-center"> STEP 4</h3>
                
<!--<form></form> -->                
                
            </div>
        </div>
    </div>

</form>

<form class="container">
    
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-10 well text-center">
                <h3 class="text-center"> STEP 4</h3>
                
<!--<form></form> -->                
                
            </div>
        </div>
    </div>

</form>

<script>

// Activate Next Step

$(document).ready(function() {
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-4').on('click', function(e) {
        $('ul.setup-panel li:eq(3)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
});


// Add , Dlelete row dynamically

     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='surname"+i+"' type='text' placeholder='Surname'  class='form-control input-md'></td><td><input  name='email"+i+"' type='text' placeholder='Email'  class='form-control input-md'></td><td><select type='text' name='local"+i+"' class='form-control'><option name='yes"+i+"' value='0'>Yes</option><option name='no"+i+"' value='1'>No</option></select></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

</script>