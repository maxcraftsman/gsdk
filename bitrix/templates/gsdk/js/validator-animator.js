var priceFill = 0;
var checkPeriod = 0;
var discountSet = 30;


function calculator(price,period,discount){
	year = Math.ceil(price * period);
	discountres = (year/100)*discount;
	result = year - discountres;
	$('body').append('<style>.cost-item{height:'+discount+'%}.econ-item{height:'+(100-discount)+'%}</style>')
	$('.profitsumm span').html(discountres);
	$('#forYear .cost-item span').html(discountres);
	$('#forYear .econ-item span').html(result);
	$('#for2Year .cost-item span').html(discountres * 2);
	$('#for2Year .econ-item span').html(result * 2);
	$('#for3Year .cost-item span').html(discountres * 3);
	$('#for3Year .econ-item span').html(result * 3);
	return year;
}

$('.product-item').on("click",function(){
	priceFill = +$(this).find("input").data("fill");
	calculator(priceFill,checkPeriod, discountSet);
	if(pageID == 0){
		$("#page-"+pageID).show();
		pageID++;
	}
});

if($('*').is($('[name="often"]'))){
	$('.r-btn-item').on("click",function(){
		checkPeriod = +$(this).find("input").val();
		calculator(priceFill,checkPeriod, discountSet);
	});
}

$.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^\d{3}-\d{3}-\d{4}$/.test(value);
}, "Номер телефона в формате 999-123-4567");
$('#searchInput').on("keyup", function(){
	if($(this).val().length >= 2){
		$('.search-opener').show();
		$(".count-item").on("click",function(){
			$('#searchInput').val($(this).find($('.count-name')).data('name'));
		});
	} else {
		$('.search-opener').hide();
	}
});
$('.form-item-link').on("click",function(){
	var vrble = $(this).children('span');
	$('#selectedDevices').show();
	if ($(this).children('span').html() !== "Добавлено"){
		$(this).children('span').html('Добавлено');
		$('#selectedDevices .block-intro-content').append('<span data-name="'+vrble.attr('data-name')+'">'+ vrble.attr('data-name')+'</span>');
	}
});
$('.flush-data').on("click",function(){
	$('#selectedDevices .block-intro-content *').remove();
	$('#selectedDevices').hide();
	$('.form-item-link>span').html('Добавить');
});
$('input[name=phonenum]').on("keypress",function(e){
	if (e.keyCode==8){
		$(this).trigger('keypress');
	} else if($(this).val().length == 3){
		var curval = $(this).val() + "-";
		$(this).val(curval);
	} else 	if($(this).val().length == 7){
		var curval = $(this).val() + "-";
		$(this).val(curval);
	}
});
$('#searchOrg').on('click',function(){
	$('form.input-block').validate({
		messages:{
			searchorg:{
				required: "Введите символы для поиска"
			}
		}
	});
	if ($('form.input-block').valid()){
		$('#searchOrgResult').show();
	}

});
$('.search-opener .count-item').on('click',function(){
	if ($('*').is($("#searchChoices"))){
		$('#searchResult').hide();
		var el = $(this).children('.count-name');
		$('.search-opener').hide();

		$('.brend-content').hide();
		pos = 4;
		$('.s-brend').html(activeState(el.attr('data-brend'))).attr("data-state","cur");
		$('.s-device').html(activeState(el.attr('data-device'))).attr("data-state","cur");
		$('.s-type').html(activeState(el.attr('data-type'))).attr("data-state","cur");
		$('.s-model').html(activeState(el.attr('data-name'))).attr("data-state","cur");
		$('#searchResult').show();
	} else if ($('*').is("#page-start")) {
		$('.search-opener').hide();
		$('#page-start').show();
	}
});
// Path
if($('*').is($('#page-start'))){
	pageID = 0;
	$('#page-start form').validate({
		rules: {
			orgname: {
				required: true
			},
			inn: {
				required: true
			},
			contactname: {
				required: true
			},
			phonenum: 'customphone',
		},
		messages: {
      orgname: {
        required: "Введите имя организации",
        minlength: "Имя должно быть не меньше 5 букв"
      },
      inn: {
        required: "Введите номер ИНН",
        minlength: "ИНН должно быть не меньше 10 чисел"
      },
      contactname: {
        required: "Введите ФИО ответственного лица",
        minlength: "Имя должно быть не меньше 3 букв"
      },
			phonenum: {
				required: "Введите номер телефона"
			},
    }
	});
	$('button.form-submit, [name="often"]').on("click",function(){
		if ($('#page-start form').valid()){
			console.log(pageID);
			$(this).hide();
			$("#page-"+pageID).show().css('visibility','visible');
			if($('*').is($("#page-"+pageID)) == false){
				$("#page-last").show();
			}
			if(($('*').is($("#graphicResult"))) && (pageID == 2)){

			}
			pageID++;
		} else {
			alert('hell yeah')
		}
	});
}
function activeState(name){
	return '<span>'+name+'</span><span href="#" class="chng-link">Изменить</span>';
}
function clearChain(par){
	switch (par) {
		case '#0':
			$('.s-brend').html("Производитель").attr("data-state","cur");
			$('.s-device').html("Устройство");
			$('.s-type').html("Тип");
			$('.s-model').html("Модель");
			break;
		case '#1':
			$('.s-device').html("Устройство").attr("data-state","cur");
			$('.s-type').html("Тип");
			$('.s-model').html("Модель");
			break;
		case '#2':
			$('.s-type').html("Тип").attr("data-state","cur");
			$('.s-model').html("Модель");
			break;
		case '#3':
			$('.s-model').html("Модель").attr("data-state","cur");
			break;
	}
}
var pos = 0;
function stepCounter(posthis){
	pos = posthis.attr("href").slice(-1);
}
$('.search-step').on("click", function(){
	if ($(this).attr("href").slice(-1) <= pos){
		clearChain($(this).attr("href"));
		$('.brend-content').show();
		$('#searchResult').hide();
		pos = $(this).attr("href").slice(-1);
	} else {
		event.preventDefault();
	}
});
$("#searchSteps .models-list a").on("click", function(){
	$('.s-model').html(activeState($(this).html()));
	$('#searchResult').show();
	$('.brend-content').hide();
});
$("#searchSteps .selectType a").on("click", function(){
	$('.s-type').html(activeState($(this).find('.device-name').html()));
	stepCounter($(this));
});
$("#searchSteps .selectDevice a").on("click", function(){
	$('.s-device').html(activeState($(this).find('.device-name').html()));
	stepCounter($(this));
});
$("#searchSteps .brend-item a").on("click", function(){
	$('.s-brend').html(activeState($(this).attr('data-name')));
	stepCounter($(this));
});
