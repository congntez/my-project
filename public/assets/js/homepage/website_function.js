function searchProduct() {
	var url = $(this).attr('data-ajax-url');
	var searchValue = $('#i_search_input').val();
	console.log(searchValue);

	$.ajax({
		url: url,
		type: "POST",
		data: {
			search: searchValue
		},
		dataType: "json",
		success: function (dataAll) {
			$('.a_home_result').html(dataAll.html);
		},
		error: function (a, b, c) {

		},
		complete: function (jqXHR, textStatus) {
			hide_loading();
		}
	});
}

function deleteCart() {
	var url = $(this).attr('data-href'),
		id = $(this).attr('data-cart');
	console.log(id);
	$.ajax({
		url: url,
		type: "POST",
		data: {
			id: id
		},
		dataType: "json",
		success: function (dataAll) {
			if (dataAll.state == '0') {
				notify(dataAll.msg, "alert-danger");
			}
			else {
				notify(dataAll.msg, "alert-success");
				setTimeout(function () {
					window.location = dataAll.redirect_url;
				}, 5000);
			}
		},
		error: function (a, b, c) {

		},
		complete: function (jqXHR, textStatus) {
			hide_loading();
		}
	});
}

function openCategoriesChild(e) {
	e.preventDefault();
	$(this).toggleClass('fa-plus').toggleClass('fa-window-minimize');
	$(this).parents('.b_home_page_categories_layout_row').find('.w_home_page_categories_child_row').slideToggle(400, 'swing');
}

function openSideBar() {
	$(document).find('.b_home_page_categories_child.active').parent().show();
	$(document).find('.b_home_page_categories_child.active').parents('.b_home_page_categories_layout_row').find('.w_home_page_categories_open').removeClass('fa-plus').addClass('fa-window-minimize');
}