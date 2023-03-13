<?php
/**
 * обработчик видео ссылки и получение превью
 */
if ( ! function_exists( 'ix_get_video_code' ) ){

	function ix_get_video_code($video) {

		if (preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $video, $matches)) {

			$code = 'https://www.youtube.com/embed/' . $matches[2];
			$videoImage = 'https://img.youtube.com/vi/' . $matches[2] . '/hqdefault.jpg';

		} elseif (strpos($video, 'ok.ru') !== false) {
			preg_match( '|ok.ru\/video\/(\d+)|is', $video, $result );
			if ( isset( $result[1] ) ) {
				$code = '//ok.ru/videoembed/' . $result[1];
			}
		} else {
			if (strpos($video, 'vk.com') !== false) {

				$code = 'https://' .  str_replace(array('//', 'https:', 'http:'), '', $video);
			}
		}

		return array('code' => $code, 'image' => $videoImage);

	}
}
if ( ! function_exists( 'getYoutubeID' ) ){
	function getYoutubeID($link)
	{
		$link = preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $link, $matches);

		if(isset($matches[2]) && $matches[2] != ''){
			return $matches[2];
		} else {
			return 'error';
		}
	}
}
if ( ! function_exists( 'ix_get_video_prew' ) ){

	function ix_get_video_prew($video) {

		if (preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $video, $matches)) {

//			$code = 'https://www.youtube.com/embed/' . $matches[2];
			$videoImage = 'https://img.youtube.com/vi/' . $matches[2] . '/mqdefault.jpg';

		} else {
			if (strpos($video, 'vk.com') !== false) {

				$code = 'https://' .  str_replace(array('//', 'https:', 'http:'), '', $video);
				$data = file_get_contents('https://' . str_replace(array('//', 'https:', 'http:'), '', $code));

				preg_match_all('#<video.*?poster=["\']*([\S]+)["\'].*?>#si', $data, $images);
				$videoImage = $images[1][0];
			}
		}

//		$attach_id = media_sideload_image( $videoImage, 0, '', 'id' );

		return $videoImage;

	}
}

add_action( 'video_reviews_across' , 'get_the_video_reviews_across');
function get_the_video_reviews_across() {

	$video_reviews_across_arr_links = get_field('video_reviews_across', 'option');

	ob_start();

	foreach ($video_reviews_across_arr_links as $item) {

		$data = ix_get_video_code($item['video_reviews_across_link']);
        $img_preview = $data['image'];
		?>
        <div class="item">
            <a data-fancybox href="<?php echo $data['code']; ?>">
                <img src="<?php echo ix_get_img($img_preview, 430, 250 ) ?>" alt="" class="img-responsive">
            </a>
        </div>
		<?php
	}

	echo ob_get_clean();

}

add_action( 'images_reviews_across' , 'get_the_img_reviews_across');
function get_the_img_reviews_across() {

	$img_reviews_across_arr_links = get_field('img_reviews_across', 'option');

    ob_start();

    foreach ($img_reviews_across_arr_links as $item) {

        $img_url = wp_get_attachment_image_url($item['img_reviews_across_id'],'full');
        ?>
        <div class="item">
            <a data-fancybox href="<?php echo $img_url; ?>">
                <img src="<?php echo ix_get_img_url_for_id( $item['img_reviews_across_id'], 230, 290 ); ?>" alt="" class="img-responsive">
            </a>
        </div>
        <?php

    }

    echo ob_get_clean();

}