<script>
    $(document).ready(function () {
	apiCall("/hiswinwe/payments/notransact.json", 'transact', '#transactions');
	apiCall("/hiswinwe/holders/noaccounts.json", 'accounts', '#accounts');
    });
    
    //template
    function apiCall(path, value, element) {
	$.ajax({
	    url: path,
	    type: 'GET',
	    contentType: 'application/json',
	    dataType: "json",
	    success: function (data) {
		$(element).html(data[value]);
	    }
	});
    }
</script>

<div class="col-lg-4">
    <div class="ui card">
	<div class="image">
	    <?= $this->Html->image('../img/card1.jpg') ?>
	    <!--<img src="img/card1.jpg">-->
	</div>
	<div class="content text-center">
	    <a class="header">No of members</a>
	    <div class="meta">
		<span class="date">Joined in <?= date('Y') ?></span>
	    </div>
	    <div class="description">
		<h1 class="ui center aligned icon header">
		    <i class="circular child icon"></i>
		    <div id="accounts"></div>
		</h1>
	    </div>
	</div>
    </div>
</div>

<div class="col-lg-4">
    <div class="ui card">
	<div class="image">
	    <?= $this->Html->image('../img/card2.jpg') ?>
	    <!--<img src="img/card2.jpg">-->
	</div>
	<div class="content text-center">
	    <a class="header">No of funerals</a>
	    <div class="meta">
		<span class="date">Joined in <?= date('Y') ?></span>
	    </div>
	    <div class="description">
		<h1 class="ui center aligned icon header">
		    <i class="circular user icon">
		    </i><?= '22' ?>
		</h1>
	    </div>
	</div>
    </div>
</div>



<div class="col-lg-4">
    <div class="ui card">
	<div class="image">
	    <?= $this->Html->image('../img/card3.jpg') ?>
	    <!--<img src="img/card3.jpg">-->
	</div>
	<div class="content text-center">
	    <a class="header">No of transactions</a>
	    <div class="meta">
		<span class="date">Joined in <?= date('M') ?></span>
	    </div>
	    <div class="description">
		<h1 class="ui center aligned icon header text-info">
		    <i class="circular payment icon">
		    </i><div id="transactions"></div>
		</h1>
	    </div>
	</div>
    </div>
</div>

<!--<br/>
<div class="col-lg-12">
    <div class="list-group panel">
	<p class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Basic</p>
	<p class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Premium</p>
    </div>
</div>-->
