<div class="col-sm-2">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additional', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dependant'), ['controller' => 'Dependant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependant'), ['controller' => 'Dependant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payment Due'), ['controller' => 'PaymentDue', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment Due'), ['controller' => 'PaymentDue', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>-->
</nav>
</div>

<div class="col-sm-12">
    <div class="wizard">
    <div class="wizard-inner">
        <div class="connecting-line"></div>
<ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a data-toggle="tab" role="tab" aria-controls="step1" href="#home" title="Step 1">
                        <span class="round-tab"><i class="glyphicon glyphicon-folder-open"></i></span>
                    </a>
                </li>
                <li role="presentation">
                    <a data-toggle="tab" role="tab" aria-controls="step1" href="#menu1" title="Step 2">
                        <span class="round-tab"><i class="glyphicon glyphicon-pencil"></i></span>
                    </a>
                </li>
                <li role="presentation">
                    <a data-toggle="tab" role="tab" aria-controls="step1" href="#menu2" title="Step 3">
                        <span class="round-tab"><i class="glyphicon glyphicon-picture"></i></span>
                    </a>
                </li>
                <li role="presentation">
                    <a data-toggle="tab" role="tab" aria-controls="step1" href="#member" title="Step 4">
                        <span class="round-tab"><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
            </ul>
	
	 <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <div class="container">
                    <h3>Step 1</h3>
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>

<div id="menu1" class="tab-pane fade">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
        <?php
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
            echo $this->Form->input('line_1');
            echo $this->Form->input('line_2');
            echo $this->Form->input('line_3');
            echo $this->Form->input('city');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div id="menu2" class="tab-pane fade">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Dependant') ?></legend>
        <?php
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
            echo $this->Form->input('line_1');
            echo $this->Form->input('line_2');
            echo $this->Form->input('line_3');
            echo $this->Form->input('city');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div id="member" class="tab-pane fade">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Member') ?></legend>
        <?php
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
            echo $this->Form->input('line_1');
            echo $this->Form->input('line_2');
            echo $this->Form->input('line_3');
            echo $this->Form->input('city');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
</div>



<style>
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>



<script>
    $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});
    </script>