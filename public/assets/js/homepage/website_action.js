$(document).ready(function () {
	$(document).on("click", ".k_form_btn_search", searchProduct);
	$(document).on("click", ".k_form_btn_search", searchProduct);
	$('.w_search_input').keypress(function (e) {
		if (e.which == 13) {
			var url = $(this).parent('.k_form').find('.k_form_btn_search').attr('data-ajax-url');
			var searchValue = $('#i_search_input').val();

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
			return false;
		}
	});
	$(document).on("click", ".btn_delete_cart", deleteCart);
	$(document).on("click", ".w_home_page_categories_open", openCategoriesChild);

	if (window.attachEvent) {
		window.attachEvent('onload', openSideBar());
	}
	else if (window.addEventListener) {
		window.addEventListener('load', openSideBar(), false);
	}
	else {
		document.addEventListener('load', openSideBar(), false);
	}
});