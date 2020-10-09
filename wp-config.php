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
define( 'AUTH_KEY',         '~#l$1J,EYr)mXLw(+QF<va&WJ*6Bu}S,I9madK<?{F+7wj6pl%rw5S%1%W+0%!~e' );
define( 'SECURE_AUTH_KEY',  'q|(OrB#vm5tN?eYt}rK#?^g6*kI{Mrg=k/umB=0}2ANF*w.JPj62,+!{kt|(K.z)' );
define( 'LOGGED_IN_KEY',    'S:JS/u2aIzQw;^%{{Qz;Jlpx} n@dIHv;cpG]!j(cx-Qy2_`RP=~tR*e9A?|4GxQ' );
define( 'NONCE_KEY',        '/dMniAqZe(f3p3YA-6cYL4fmpq@WmR.Pp^A)]R|S4v7kPn>X&U/Rdtr-l$=s6yjY' );
define( 'AUTH_SALT',        '6Hg=-!}OfS4Wq,cQCr=sJ.6:MY|s!KfM;eYQb2dQ4(yrU.x[1KYROF-w0#?H%*&D' );
define( 'SECURE_AUTH_SALT', 'NH2>pMN1%Uv:kRs}Oe`qDjr4u,{Ak}4]u19I0Oaw{OxF>98{2+,E~ERc`]&47oE-' );
define( 'LOGGED_IN_SALT',   'R]}90jisT5AmhmSdb]D8z];pjbwz1*J0x5mRxE&? +|do r%AVbzH0r`]2-XbZF]' );
define( 'NONCE_SALT',       'u9QfnjHun( 2T:,m;5M>sF3:l70Yg0*fmit-1|%-1wwj=SzJMh>L5|ac*5`z[Z?A' );

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
