<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '),/|p}VAA#I}u|1/2J*7{X2JPf?/v LG:XA)Hc>fAEV39wsCJW]tzr+f.d;p^J<Z' );
define( 'SECURE_AUTH_KEY',  '-iM/in&{$`{f$;IQ.[1b*ZsxLkED2A(B%Q%8kT>+h!6(?t>+/./$iWo|p/mXR]=h' );
define( 'LOGGED_IN_KEY',    'p[t36.w[N]s W+FGvWTtDpz$r0sczM&Qek-ib}uh[(hq987@w$ +S+PmAA^&_ke4' );
define( 'NONCE_KEY',        '0TUT,YQMKV~=/kE;L^Io+K{Y(vJIm,E6IZ4jD:e4b^6uWZ~BX8u- c+BL9Q/.^C_' );
define( 'AUTH_SALT',        'mQ _^B;8[hdv +d/1(+}5]O7[ad~5GCH~FFMBP)ru/=B[]5>GCJP!QGE^bh_taLw' );
define( 'SECURE_AUTH_SALT', 'y?9(y-KnksQ~a,);m7UqiG4ck/n-U}/VJ=Y&ogD`O+%h^eMO&`s*:?++V)u1_jg7' );
define( 'LOGGED_IN_SALT',   'nCwOwKr)EiUy4b~[Lmb)l_He}UAoaWz.i*i:5(&5>6>DgAnH0O85xGipd|(>cR_3' );
define( 'NONCE_SALT',       '/wDB%ALLtG Dd~a.$jr,/wMTbK1HvV:^AABpoPIlGdYUi^WXU]]X2WzH?`)K{[<5' );

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
