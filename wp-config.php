<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'inohara' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'duchoang2104' );

/** Hostname của database */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':%0*lm/UIjeA39~ GoRDU?gVP$:I|rm#k*^FqszCNI]Y uQ:N~N7QL_P}~>).)]v' );
define( 'SECURE_AUTH_KEY',  '9WM1Acn]^mIJDAO8tY5d01bEQ/xh<41Bt-FUQc&E&n41=EF;n%cFX@fg[4nwNVxo' );
define( 'LOGGED_IN_KEY',    '`yX^V[9FO#$?5:>lB(S/5D tQi40|<pz[@OOPmW-O-iJb3F{%=-7FcViiF*J]+S^' );
define( 'NONCE_KEY',        'Brn3L.M0]R>$c$$*[A:#c_{,g[oZA# (cB X_7?|auSI@^SI}j,+RiKBRwQ|?C/m' );
define( 'AUTH_SALT',        'L`1`[w<-)bY8TL~,D>|%rA@6l=j;jx|%ce)jue4g8P<`y^:*C3mSf#k<e7aLI5Jq' );
define( 'SECURE_AUTH_SALT', '(8)c,qJL4=~O]!VUly$CjYTlJBT$9$5MJK2B,(,]`0In13,iSIrl}x;[2@c6dTlf' );
define( 'LOGGED_IN_SALT',   '!e+<x8{vKv^I9kv[<}9gi_P @U3XFdue{;0^;lYX^$N0G)7N^#lrn^pz}|WH#$+q' );
define( 'NONCE_SALT',       '>84teAE}CYRY3?Q56+|>^_V-EONv{TQK}#njrpTcv%fYQBsB_&[FH6T)=cRcMr3o' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
