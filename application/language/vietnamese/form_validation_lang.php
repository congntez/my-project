<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= ' Trường \'{field}\' là bắt buộc.';
$lang['form_validation_isset']			= ' Trường \'{field}\' phải có một giá trị.';
$lang['form_validation_valid_email']		= ' Trường \'{field}\' phải chứa một địa chỉ Email hợp lệ.';
$lang['form_validation_valid_emails']		= ' Trường \'{field}\' phải chứa tất cả địa chỉ Email hợp lệ.';
$lang['form_validation_valid_url']		= ' Trường \'{field}\' phải chứa một URL hợp lệ.';
$lang['form_validation_valid_ip']		= ' Trường \'{field}\' phải chứa một địa chỉ IP hợp lệ.';
$lang['form_validation_min_length']		= ' Trường \'{field}\' phải có ít nhất \'{param}\' ký tự.';
$lang['form_validation_max_length']		= ' Trường \'{field}\' không thể vượt quá \'{param}\' ký tự.';
$lang['form_validation_exact_length']		= ' Trường \'{field}\' phải đúng \'{param}\' ký tự.';
$lang['form_validation_alpha']			= ' Trường \'{field}\' chỉ sử dụng các ký tự trong bảng chữ cái.';
$lang['form_validation_alpha_numeric']		= ' Trường \'{field}\' chỉ sử dụng các ký tự trong bảng chữ cái và số.';
$lang['form_validation_alpha_numeric_spaces']	= ' Trường \'{field}\' chỉ sử dụng các ký tự trong bảng chữ cái, chữ số và khoảng trắng.';
$lang['form_validation_alpha_dash']		= ' Trường \'{field}\' chỉ sử dụng các ký tự  bảng chữ cái, chữ số, gạch dưới và gạch ngang.';
$lang['form_validation_numeric']		= ' Trường \'{field}\' chỉ sử dụng các ký tự là chữ số.';
$lang['form_validation_is_numeric']		= ' Trường \'{field}\' phải chứa các ký tự là SỐ.';
$lang['form_validation_integer']		= ' Trường \'{field}\' phải chứa một số Nguyên.';
$lang['form_validation_regex_match']		= ' Trường \'{field}\' sai định dạng.';
$lang['form_validation_matches']		= ' Trường \'{field}\' không đúng với \'{param}\'.';
$lang['form_validation_differs']		= ' Trường \'{field}\' phải khác với \'{param}\' .';
$lang['form_validation_is_unique'] 		= ' Trường \'{field}\' phải chứa một giá trị duy nhất.';
$lang['form_validation_is_natural']		= ' Trường \'{field}\' chỉ chấp nhận các số.';
$lang['form_validation_is_natural_no_zero']	= ' Trường \'{field}\' dữ liệu nhập vào phải là chữ số và lớn hơn không.';
$lang['form_validation_decimal']		= ' Trường \'{field}\' dữ liệu nhập vào phải là số thập phân.';
$lang['form_validation_less_than']		= ' Trường \'{field}\' phải nhỏ hơn \'{param}\'.';
$lang['form_validation_less_than_equal_to']	= ' Trường \'{field}\' phải nhỏ hơn hoặc bằng \'{param}\'.';
$lang['form_validation_greater_than']		= ' Trường \'{field}\' phải lớn hơn \'{param}\'.';
$lang['form_validation_greater_than_equal_to']	= ' Trường \'{field}\' phải lớn hơn hoặc bằng \'{param}\'.';
$lang['form_validation_error_message_not_set']	= 'Không thể xác định thông báo lỗi với trường \'{field}\'.';
$lang['form_validation_in_list']		= ' Trường \'{field}\' phải là một trong: \'{param}\'.';
//File upload for form validation
$lang['form_validation_file_required'] = ' Tệp tin \'{field}\' là bắt buộc.';
$lang['form_validation_file_max_size'] = ' Dung lượng tệp tin \'{file_name}\' quá lớn. (Dung lượng tối đa \'{param}KB\').';
$lang['form_validation_file_min_size'] = ' Dung lượng tệp tin \'{file_name}\' quá nhỏ. (Dung lượng tối thiểu là \'{param}KB\').';
$lang['form_validation_file_allowed_types'] = 'Kiểu tệp tin \'{file_name}\' không hợp lệ. (Các kiểu hợp lệ là \'{param}\').';
$lang['form_validation_file_disallowed_types'] = 'Kiểu tệp tin \'{file_name}\' không hợp lệ. (Kiểu phải khác các kiểu sau: {param}.';
$lang['form_validation_file_image_mindim'] = ' Độ phân giải của file \'{file_name}\' quá nhỏ. (Độ phân giải nhỏ nhất có thể là \'{param}\' [chiều rộng,chiều cao]).';
$lang['form_validation_file_image_maxdim'] = ' Độ phân giải của file \'{file_name}\' quá lớn. (Độ phân giải lớn nhất có thể là \'{param}\' [chiều rộng,chiều cao]).';
$lang['form_validation_file_min_width'] = ' Chiều rộng của tệp tin \'{file_name}\' quá nhỏ. (chiều rộng nhỏ nhất có thể là \'{param}px\').';
$lang['form_validation_file_max_width'] = ' Chiều rộng của tệp tin \'{file_name}\' quá lớn. (chiều rộng lớn nhất có thể là \'{param}px\').';
$lang['form_validation_file_min_height'] = ' Chiều cao của tệp tin \'{file_name}\' quá nhỏ. (chiều cao nhỏ nhất có thể là \'{param}px\').';
$lang['form_validation_file_max_height'] = ' Chiều cao của tệp tin \'{file_name}\' quá lớn. (chiều cao lớn nhất có thể là \'{param}px\').';
$lang['form_validation_file_upload_path'] = ' Đường dẫn upload \'{param}\' không tồn tại hoặc không thể ghi.';
