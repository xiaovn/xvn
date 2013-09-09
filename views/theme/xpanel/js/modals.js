/* ==========================================================
 * QuickAdmin v1.4.0
 * modals.js
 * 
 * http://www.mosaicpro.biz
 * Copyright MosaicPro
 *
 * Built exclusively for sale @Envato Marketplaces
 * ========================================================== */ 

$(function()
{
	$('#modals-bootbox-alert').click(function()
	{
		bootbox.alert("<div style='text-align: center'><span class='glyphicons standard primary headset'><i></i></span>&nbsp;&nbsp;Call to "+ name +" by Phone &nbsp;&nbsp;&nbsp;<span class='btn btn-info'>"+ phone +"</span></div>", function(result)
		{
			$.gritter.add({
				title: 'Callback!',
				text: "<b></b>I'm just a BootBox Alert callback!"
			});
		});
	});
    $('#bootbox-member-yahoo').click(function()
    {
        bootbox.alert("<div style='text-align: center'>Chat with "+ name +" on Yahoo<br><a href='ymsgr:sendIM?"+ yahoo + "'><img src='http://presence.msg.yahoo.com/online?u="+ yahoo +"&m=g&t=2&l=us'></a></div>", function(result)
        {
            $.gritter.add({
                title: 'Callback!',
                text: "<b></b>I'm just a BootBox Alert callback!"
            });
        });
    });
	$('#modals-bootbox-confirm').click(function()
	{
		bootbox.confirm("Are you sure?", function(result)
		{
			$.gritter.add({
				title: 'Callback!',
				text: "BootBox Confirm Callback with result: "+ result
			});
		});
	});
	$('#modals-bootbox-prompt').click(function()
	{
		bootbox.prompt("What is your name?", function(result)
		{
			if (result === null) {
				$.gritter.add({
					title: 'Callback!',
					text: "BootBox Prompt Dismissed!"
				});
			} else {
				$.gritter.add({
					title: 'Hi ' + result,
					text: "BootBox Prompt Callback with result: "+ result
				});
			}
		});
	});
	$('#modals-bootbox-custom').click(function()
	{
		bootbox.dialog("I am a custom dialog", [{
		    "label" : "Success!",
		    "class" : "btn-success",
		    "callback": function() {
		    	$.gritter.add({
					title: 'Callback!',
					text: "Great success"
				});
		    }
		}, {
		    "label" : "Danger!",
		    "class" : "btn-danger",
		    "callback": function() {
		    	$.gritter.add({
					title: 'Callback!',
					text: "Uh oh, look out!"
				});
		    }
		}, {
		    "label" : "Click ME!",
		    "class" : "btn-primary",
		    "callback": function() {
		    	$.gritter.add({
					title: 'Callback!',
					text: "Primary button!"
				});
		    }
		}, {
		    "label" : "Just a button..."
		}]);
	});
});