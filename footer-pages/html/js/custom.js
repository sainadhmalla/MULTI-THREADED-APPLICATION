$(function() {
$('.mapTableDivtab ul li').click(function(){
	$('.mapTableDivtab ul li').removeClass('activeMp');
	$(this).addClass('activeMp');
});
$('.stateUtsDivTab ul li').click(function(){
	$('.stateUtsDivTab ul li').removeClass('activeMp');
	$(this).addClass('activeMp');
});
});