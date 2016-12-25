

function ShowTooltip(elem)
{
	elem.setAttribute('data-toggle', 'tooltip');
	elem.setAttribute('data-original-title', 'Copied');
	elem.setAttribute('title', 'Copied');
	$(elem).tooltip('show');
}

function HideTooltip(elem)
{
	elem.removeAttribute('data-toggle');
	elem.removeAttribute('title');
	elem.removeAttribute('data-original-title');
	$(elem).tooltip('hide');
}

function HandleScroll()
{
	if ($('#content-container').scrollTop() == 0)
	{
		$('.page-up').addClass('disabled');
		$('.page-down').removeClass('disabled');
	}
	else if ($('#content-container').scrollTop() == $('#content-container')[0].scrollHeight - $('#content-container').height())
	{
		$('.page-up').removeClass('disabled');
		$('.page-down').addClass('disabled');
	}
	else
	{
		$('.page-up').removeClass('disabled');
		$('.page-down').removeClass('disabled');
	}
}

function BindPage()
{
	$('.content').css('width', 'calc(100% + 5px)');

	$('[data-toggle="tooltip"]').tooltip();

	$(".pgb").each(function()
	{
		$(this).progressbar();
		$(this).progressbar('option', 'max', parseInt($(this).data('max')));
		$(this).progressbar('option', 'value', parseInt($(this).data('value')));
	});

	$('#content-container').find('.hover-expand-target').hide();

	$('#content-container').find(".hover-expand").hover(
	function()
	{
		$(this).find('.hover-expand-target').stop(true, false).animate({width: 'toggle'});
	}
	,function()
	{
		$(this).find('.hover-expand-target').stop(true, false).animate({width: 'toggle'});
	});

	$(".nav-stacked").each(function (index, item)
	{
		$(item).css('width', $(item).parent().width());
	});

	$('.nav-tabs li').click(function()
	{
		$('#content-container').scrollTo($('#top'), 300);
	});

	$(window).resize(function ()
	{
		$(".nav-stacked").each(function (index, item)
		{
			$(item).css('width', $(item).parent().width());
		});
	});

	$('hr').after('<div class="hr-after-1"></div><div class="hr-after-2"></div><div class="hr-after-3"></div><div class="hr-after-4"></div>');

	$('.loading-slate').stop(true, false).fadeOut();
}

$(function ()
{
	$('#content-container').scroll(function ()
	{
		HandleScroll();
	});
	HandleScroll();

	$('.page-up').click(function (e)
	{
		$('#content-container').scrollTo($('#top'), 800);
	});

	$('.page-down').click(function (e)
	{
		$('#content-container').scrollTo($('#bottom'), 800);
	});



	new Pjax({
		elements : "a",
		selectors: ["title", ".breadcrumbs-wrapper", ".content"]
	});

	$(document).on('pjax:complete', function()
	{
		$('.loading-slate').stop(true, false).fadeIn();

		BindPage();

		$('#content-container').scrollTo($('#top'), 300);
	});

	$('.hover-expand-target').hide();

	$(".hover-expand").hover(
		function ()
		{
			$(this).find('.hover-expand-target').stop(true, false).animate({width: 'toggle'});
		}
		, function ()
		{
			$(this).find('.hover-expand-target').stop(true, false).animate({width: 'toggle'});
		});

	BindPage();
});