<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
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
	    <div class="panel-heading">
		<h3 class="panel-title"><?= __('Address') ?></h3></div>
	    <div class="panel-body">
		<div class="content-box-large box-with-header">
		    <div class="row">
			<div class="col-lg-4">
			    <?php
			    // echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
			    echo $this->Form->input('line_1', ['class' => "form-control input-sm"]);
			    ?>
			</div>
			<div class="col-lg-4">
			    <?php
			    echo $this->Form->input('line_2', ['class' => "form-control input-sm"]);
			    ?>
			</div>
			<div class="col-lg-4">
			    <?php
			    echo $this->Form->input('line_3', ['class' => "form-control input-sm"]);
			    ?>
			</div>
			<div class="col-lg-4">
			    <?php
			    echo $this->Form->input('city', ['class' => "form-control input-sm"]);
			    ?>
			</div>
			<div class="col-lg-2">
			    <?php
			    echo $this->Form->input('code', ['class' => "form-control input-sm"]);
			    ?>
			    <br>
			</div>
		    </div>
		</div>
	    </div>
	</div>

	<div class="panel panel-default">
	    <div class="panel-heading">
		<h3 class="panel-title"><?= __('Contact details') ?></h3></div>
	    <div class="panel-body">
		<div class="content-box-large box-with-header">
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('home', ['class' => "form-control input-sm"]);
			?>
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('work', ['class' => "form-control input-sm"]);
			?>
		    </div>
		    <div class="col-lg-4">
			<?php
			echo $this->Form->input('cell', ['class' => "form-control input-sm"]);
			?>
		    </div>
		    <div class="col-lg-12">
			<ul class="pager wizard">
			    <!--<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>-->
			    <li class="previous"><a href="javascript:void(0);">Previous</a></li>
			    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
			    <li class="next" id="activate-step-3"><a href="javascript:void(0);">Next</a></li>
			</ul>
		    </div>
		    <div class="col-lg-4">
			<?php
			// echo $this->Form->input('holder_id', ['options' => $holder, 'empty' => true, 'class' => "form-control input-sm"]);
			?>
		    </div>
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

                <div id="dependant_fields">

		</div>
		<div class="col-sm-3 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="names" name="dependant[names]" value="" placeholder="Names">
		    </div>
		</div>
		<div class="col-sm-3 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="surname" name="dependant[surname1]" value="" placeholder="Surname">
		    </div>
		</div>
		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="idnumber" name="dependant[idnumber1]" value="" placeholder="ID Number">
		    </div>
		</div>
		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<select class="form-control" name="dependant[Gender1]">
			    <option value="0">Male</option>
			    <option value="1">Female</option>
			</select>
		    </div>
		</div>

		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<div class="input-group">
			    <select class="form-control" name="dependant[local1]">
				<option value="No">No</option>
				<option value="Yes">Yes</option>
			    </select>
			    <div class="input-group-btn">
				<button class="btn btn-success" type="button"  onclick="dependant_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
			    </div>
			</div>
		    </div>
		</div>
		<div class="clear1"></div>
		<ul class="pager wizard">
		    <li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
		    <!--<li class="previous"><a href="javascript:void(0);">Previous</a></li>-->
		    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
		    <li class="next" id="activate-step-4"><a href="javascript:void(0);">Next</a></li>
		</ul>

            </div>
        </div>
    </div>
</div>

<div class="row setup-content" id="step-4">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Additional Member(s)</div>
            <div class="panel-body">
		<div id="education_fields">

		</div>
		<div class="col-sm-3 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="names" name="additional[names]" value="" placeholder="Names">
		    </div>
		</div>
		<div class="col-sm-3 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="surname" name="additional[surname1]" value="" placeholder="Surname">
		    </div>
		</div>
		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<input type="text" class="form-control" id="idnumber" name="additional[idnumber1]" value="" placeholder="ID Number">
		    </div>
		</div>
		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<select class="form-control" name="additional[Gender1]">
			    <option value="0">Male</option>
			    <option value="1">Female</option>
			</select>
		    </div>
		</div>

		<div class="col-sm-2 nopadding">
		    <div class="form-group">
			<div class="input-group">
			    <input class="form-control" id="educationDate" name="additional[premium1]"/>
			    <div class="input-group-btn">
				<button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
			    </div>
			</div>
		    </div>
		</div>
		<div class="clear"></div>
		<ul class="pager wizard">
		    <li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
		    <!--<li class="previous"><a href="javascript:void(0);">Previous</a></li>-->
		    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
		    <li class="next" id="activate-step-5"><a href="javascript:void(0);">Next</a></li>
		</ul>
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


	// Add , Dlelete row dynamically


	var i = 1;
	var j = 0;
	$("#add_row").click(function () {
	    //$('#n' + i).html("<div class='col-lg-3'><input name='named[]' type='text' placeholder='Name' class='form-control input-md'  /></div>");
	    $('#addr').innerHTML('<div class="col-lg-3"><input type="text" name="named[]"  placeholder="Name" class="form-control"/></div><div class="col-lg-3"><input  name="surnamed[]" type="text" placeholder="Surname" class="form-control"></div><div class="col-lg-2"><input name="idnumberd" type="text" placeholder="IDNumber"  class="form-control input-md"></div><div class="col-lg-2"><input type="file" name="iddocd[]" placeholder="Attachment" class="form-control"/></div><div class="col-lg-2"><select type="text" name="locald[]" class="form-control"><option name="yes" value="Yes">Yes</option><option name="no" value="No">No</option></select></div>');
	    //$('#na').appendChild('<input type="text" name="named[]"  placeholder="Name" class="form-control"/>');

	    $('#tab_logic').append('<div id="addr"></div>');
	    i++;
	});
	$("#delete_row").click(function () {
	    if (i > 1) {
		$("#addr" + (i - 1)).html('');
		i--;
	    }
	});

	$("#add_r").click(function () {
	    $('#addrd' + j).html("<td>" + (j + 1) +
		    "</td><td><input name='namea[]' type='text' placeholder='Name' class='form-control input-md'  /> \n\
		    </td><td><input  name='surnamea[]' type='text' placeholder='Surname'  class='form-control input-md'>\n\
		    </td><td><input  name='idnumbera[]' type='text' placeholder='IDNumber'  class='form-control input-md'>\n\
		    </td><td><input type='file' name='iddoca[]' placeholder='Attachment' class='form-control input-md'/></td>");

	    $('#tab_logics').append('<tr id="addrd' + (j + 1) + '"></tr>');
	    j++;
	});
	$("#delete_r").click(function () {
	    if (j > 1) {
		$("#addrd" + (j - 1)).html('');
		j--;
	    }
	});

    });



    var room1 = 1;
    function dependant_fields() {

	room1++;
	var objTo = document.getElementById('dependant_fields')
	var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass" + room1);
	var rdiv = 'removeclass' + room1;
	divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="names" name="dependant[names' + room1 + ']" placeholder="Name"></div></div>\n\
	  <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="surname" name="dependant[surname' + room1 + ']" value="" placeholder="Surname"></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="idnumber" name="dependant[idnumber' + room1 + ']" value="" placeholder="ID Number"></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"> <select class="form-control" name="dependant[Gender"' + room1 + ']"><option value="0">Male</option><option value="1">Female</option></select></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="premium" name="dependant[premium' + room1 + ']" value="" placeholder="Id number"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_dependant_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div><div class="clear"></div>';

	objTo.appendChild(divtest)
    }
    function remove_dependant_fields(rid) {
	$('.removeclass' + rid).remove();
    }

    var room = 1;
    function education_fields() {

	room++;
	var objTo = document.getElementById('education_fields')
	var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass" + room);
	var rdiv = 'removeclass' + room;
	divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="names" name="additional[names' + room + ']" placeholder="Name"></div></div>\n\
	  <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="surname" name="additional[surname' + room + ']" value="" placeholder="Surname"></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="idnumber" name="additional[idnumber' + room + ']" value="" placeholder="ID Number"></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"> <select class="form-control" name="addtional[Gender"' + room + ']"><option value="0">Male</option><option value="1">Female</option></select></div></div>\n\
	  <div class="col-sm-2 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="premium" name="additional[premium' + room + ']" value="" placeholder="Id number"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div><div class="clear"></div>';

	objTo.appendChild(divtest)
    }


    function remove_education_fields(rid) {
	$('.removeclass' + rid).remove();
    }

    var memberTable = $('#members'),
	    memberBody = memberTable.find('tbody'),
	    memberTemplate = _.template($('#member-template').remove().text()),
	    numberRows = memberTable.find('tbody > tr').length;

    memberTable.on('click', 'a.add', function (e) {
	e.preventDefault();

	$(memberTemplate({key: numberRows++})).hide().appendTo(memberBody).fadeIn('fast');
    }).on('click', 'a.remove', function () {
	e.preventDefault();

	$(this).closest('tr').fadeOut('fast', function () {
	    $(this).remove();
	});
    });
    if (numberRows === 0) {
	memberTable.find('a.add').click();
    }
</script>