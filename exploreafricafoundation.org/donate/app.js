$(document).ready(function() {
	$("#payOptions .col .btn").on('click', function(){
		$(this).siblings().removeClass("active");
		$(this).toggleClass('active');
	});

// ========Checkbox Enable and disable function ===============
	$("#check2").css({display:'none'}); // -----set checkbox 2 disabled by default
	$("input[name='checkbox1']").on('click', function(){
		$("#check1").css({display:'none'});
		$("#check2").css({display:'block'});
		$("input[name='fname'],input[name='lname'],input[name='state'],input[name='postal']").attr({
				disabled: true,
				placeholder: 'not required'
			});	
	});
	$("input[name='checkbox2']").on('click', function(){
		$("#check2").css({display:'none'});
		$("#check1").css({display:'block'});
		$("input[name='fname']").attr({
				disabled: false,
				placeholder: 'first Name'
			});
		$("input[name='lname']").attr({
				disabled: false,
				placeholder: 'last Name'
			});
		$("input[name='state']").attr({
				disabled: false,
				placeholder: 'State / Country'
			});
		$("input[name='postal']").attr({
				disabled: false,
				placeholder: 'Postal Code'
			});

	});
	
});
