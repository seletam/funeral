<div class="col-lg-12">
    <div class="row">
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
 <!--<?= debug($holder) ?>-->
<div class="row setup-content" id="step-1">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<h3 class="panel-title"><?= __('Personal details') ?></h3></div>
	    <div class="panel-body">
		<?= $this->Form->create($holder) ?>
		<div class="row">
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('title', ['class' => "form-control input-sm"]);
			?>
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('first_names', ['class' => "form-control input-sm"]);
			?>   
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('surname', ['class' => "form-control input-sm"]);
			?>
			
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('idnumber', ['class' => "form-control input-sm"]);
			//echo $this->Form->input('dob', ['empty' => true]);
			?>
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('package', ['class' => "form-control input-sm"]);
			?>
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('premium', ['class' => "form-control input-sm"]);
			//echo $this->Form->input('address.line_1', ['class' => 'form-control']);
			//echo $this->Form->input('creation_date');
			//echo $this->Form->input('modified_date');
			?>
		    </div>
		</div>
		<ul class="pager wizard">
		    <!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
		    <!--<li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>-->
		    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
		    <li class="next" id="activate-step-2"><a href="javascript:void(0);">Next</a></li>
		</ul>
		<!--<?= $this->Form->button('Continue', ['id' => 'activate-step-2', 'class' => "btn btn-primary btn-md"]) ?>-->

	    </div>
	</div>
    </div>
</div>
<!-- </form> -->


<div class="row setup-content" id="step-2">     
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Address & Phones</div>
            <div class="panel-body">
                <div class="content-box-large box-with-header">
                    <!--<form>-->
		    <?php
		   // debug($holder);
		    //echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
		    echo $this->Form->input('address.0.line_1', ['class' => 'form-control']);
		    echo $this->Form->input('address.0.line_2', ['class' => 'form-control']);
		    echo $this->Form->input('address.0.line_3', ['class' => 'form-control']);
		    echo $this->Form->input('address.0.city', ['class' => 'form-control']);
		    echo $this->Form->input('address.0.code', ['class' => 'form-control']);
		    ?>
                    <ul class="pager wizard">
                        <!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                        <li class="next" id="activate-step-3"><a href="javascript:void(0);">Next</a></li>
                    </ul>

                    <!--</form>--> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row setup-content" id="step-3">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Dependant(s)</div>
            <div class="panel-body">
                <div class="content-box-large box-with-header">
                    <table class="table table-striped table-hover" id="tab_logic">
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
                                    Attach ID Scan
                                </th>
                                <th class="text-center">
                                    Local
                                </th>

                            </tr>
                        </thead>
                        <tbody>
			  <?php  
			  $i = 1;
			  foreach($holder->dependant as $values){?>
                            <tr id='addr0'>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <input type="text" name='named[]'  placeholder='Name' value="<?= $values['names'] ?>" class="form-control"/>
                                </td>
                                <td>
                                    <input type="text" name='surnamed[]' placeholder='Surname' value="<?= $values['surname'] ?>" class="form-control"/>
                                </td>
                                <td>
                                    <input type="text" name='idnumber[]' value="<?= $values['idnumber'] ?>" placeholder='IDNumber' class="form-control"/>
                                </td>
                                <td>
                                    <select type="text" name="locald[]" class="form-control">
                                        <option name="male" value="0">Yes</option>
                                        <option name="Female" value="1">No</option>
                                    </select>
                                </td>
                            </tr>
			  <?php $i++; }?>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                    <ul class="pager wizard">
                        <!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                        <li class="next" id="activate-step-4"><a href="javascript:void(0);">Next</a></li>
                    </ul>

                    <ul class="pager">
                        <a id="add_row" class="btn btn-success pull-left">Add Row</a>
                        <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row setup-content" id="step-4">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Dependant(s)</div>
            <div class="panel-body">
                <div class="content-box-large box-with-header">
                    <table class="table table-striped table-hover" id="tab_logic">
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
                                    Attach ID Scan
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
                                    <input type="text" name='name[]'  placeholder='Name' class="form-control"/>
                                </td>
                                <td>
                                    <input type="text" name='surname[]' placeholder='Surname' class="form-control"/>
                                </td>
                                <td>
                                    <input type="text" name='idnumber[]' placeholder='IDNumber' class="form-control"/>
                                </td>
                                <td>
                                    <input type="file" name='iddoc[]' placeholder='Attachment' class="form-control"/>
                                </td>
                                <td>
                                    <select type="text" name="local[]" class="form-control">
                                        <option name="male" value="0">Yes</option>
                                        <option name="Female" value="1">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                    <ul class="pager wizard">
                        <!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                        <li class="next" id="activate-step-5"><a href="javascript:void(0);">Next</a></li>
                    </ul>

                    <ul class="pager">
                        <a id="add_row" class="btn btn-success pull-left">Add Row</a>
                        <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row setup-content" id="step-5">
    <div class="col-xs-12">
        <div class="col-md-12 well text-center">
	    <?= $this->Form->button('Submit', ['class' => "btn btn-primary btn-md pull-right"]) ?>
	    <?= $this->Form->end() ?>          
        </div>
    </div>
</div>

<script>

    // Activate Next Step

    $(document).ready(function () {

	var navListItems = $('ul.setup-panel li a'),
		allWells = $('.setup-content');

	allWells.hide();

	navListItems.click(function (e)
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
	$('#activate-step-2').on('click', function (e) {
	    $('ul.setup-panel li:eq(1)').removeClass('disabled');
	    $('ul.setup-panel li a[href="#step-2"]').trigger('click');
	    $(this).remove();
	})

	$('#activate-step-3').on('click', function (e) {
	    $('ul.setup-panel li:eq(2)').removeClass('disabled');
	    $('ul.setup-panel li a[href="#step-3"]').trigger('click');
	    $(this).remove();
	})

	$('#activate-step-4').on('click', function (e) {
	    $('ul.setup-panel li:eq(3)').removeClass('disabled');
	    $('ul.setup-panel li a[href="#step-4"]').trigger('click');
	    $(this).remove();
	})

	$('#activate-step-5').on('click', function (e) {
	    $('ul.setup-panel li:eq(4)').removeClass('disabled');
	    $('ul.setup-panel li a[href="#step-5"]').trigger('click');
	    $(this).remove();
	})
    });


    // Add , Dlelete row dynamically

    $(document).ready(function () {
	var i = 1;
	$("#add_row").click(function () {
	    $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='name[]" + i + "' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='surname[]" + i + "' type='text' placeholder='Surname'  class='form-control input-md'></td><td><input  name='email" + i + "' type='text' placeholder='IDNumber'  class='form-control input-md'></td><td><input type='file' name='iddoc[]' placeholder='Attachment' class='form-control input-md'/></td><td><select type='text' name='local[]" + i + "' class='form-control'><option name='yes" + i + "' value='0'>Yes</option><option name='no" + i + "' value='1'>No</option></select></td>");

	    $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
	    i++;
	});
	$("#delete_row").click(function () {
	    if (i > 1) {
		$("#addr" + (i - 1)).html('');
		i--;
	    }
	});

    });

</script>
</div>