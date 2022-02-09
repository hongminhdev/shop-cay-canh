<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // Frontend
Route::get('/', 'HomeController@index');

Route::get('/trang-chu', 'HomeController@index');

Route::get('/gioi-thieu', 'HomeController@gioithieu');

Route::get('/shop', 'HomeController@shop');

Route::get('/lien-he', 'HomeController@lienhe');
Route::post('/thongtin-lienhe', 'HomeController@tt_lienhe');

Route::get('/dang-nhap', 'HomeController@dangnhap');

Route::get('/dang-ky', 'HomeController@dangky');

Route::get('/shopr', 'HomeController@shop_right');

Route::get('/gio-hang', 'HomeController@giohang');

Route::get('/danh-muc-san-pham/{category_id}', 'HomeController@dmsp'); 
Route::get('/chitiet-sanpham/{product_id}', 'HomeController@chitiet_sanpham');

Route::post('/tim-kiem', 'HomeController@timkiem');


// Backend
    // Đăng nhập
Route::get('/admin', 'AdminController@index');
    // Trang chính admin
Route::get('/dashboard', 'AdminController@show_dashboard');
    //Đăng nhập
Route::post('/admin-dashboard', 'AdminController@dashboard');

Route::get('/logout', 'AdminController@logout');

Route::get('/add-post', 'AdminController@add_post');
Route::post('/save-post', 'AdminController@save_post');
Route::get('/all-post', 'AdminController@all_post');
Route::get('/delete-post/{post_id}', 'AdminController@delete_post');
Route::get('/edit-post/{post_id}', 'AdminController@edit_post');
Route::post('/update-post/{post_id}', 'AdminController@update_post');

Route::get('/tin-tuc', 'AdminController@tin_tuc');
Route::get('/bai-viet/{post_slug}', 'AdminController@bai_viet');

Route::get('/contact', 'AdminController@contact');

    // Bình luận
Route::get('/all-comment-product', 'AdminController@all_comment_product');
Route::get('/all-comment-post', 'AdminController@all_comment_post');

Route::post('/allow-comment-post', 'AdminController@allow_comment_post');
Route::post('/allow-comment-product', 'AdminController@allow_comment_product');

Route::post('/reply-comment-post','AdminController@reply_comment_post');
Route::post('/reply-comment-product','AdminController@reply_comment_product');

// Category Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');

    //Cập nhật, xóa danh mục
Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');

Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product'); // Thêm danh mục sp

Route::get('/unactive-category-product/{category_product_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');

    // Sản phẩm
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');

Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::get('/unactive-product-new/{product_id}','ProductController@unactive_product_new');
Route::get('/active-product-new/{product_id}','ProductController@active_product_new');

Route::get('/unactive-product-feature/{product_id}','ProductController@unactive_product_feature');
Route::get('/active-product-feature/{product_id}','ProductController@active_product_feature');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

    // Bình luận sản phẩm
Route::post('/load-comment','ProductController@load_comment');
Route::post('/send-comment-product','ProductController@send_comment_product');

Route::post('/send-comment-post','ProductController@send_comment_post');
Route::post('/load-comment-post','ProductController@load_comment_post');
Route::post('/load-rep-comment-post','ProductController@load_rep_comment_post');


    // Giỏ hàng
Route::post('/save-cart','CartController@save_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');

Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
    // Giỏ hàng ajax
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/delete-pro-cart/{session_id}','CartController@delete_pro_cart');
Route::post('/update-cart','CartController@update_cart');


    // Check out (thanh toán giỏ hàng)
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/checkout','CheckoutController@checkout');

Route::get('/payment','CheckoutController@payment'); 

Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');

Route::post('/dat-hang','CheckoutController@dathang');

Route::get('/manager-order','CheckoutController@manager_order');

Route::get('/view-order/{orderId}','CheckoutController@view_order');
Route::get('/confirm-order/{orderId}','CheckoutController@confirm_order');
Route::get('/print-view-order/{orderId}','CheckoutController@print_view_order');
Route::get('/print-order/{checkout_code}','CheckoutController@print_order');

Route::get('/login','CheckoutController@login');
Route::post('/login-acc','CheckoutController@login_acc');

    // Phí vận chuyển
Route::get('/delivery','DeliveryController@delivery');
Route::post('/delivery-fee','DeliveryController@deliveryfee');
Route::post('/update-delivery','DeliveryController@update_delivery');











