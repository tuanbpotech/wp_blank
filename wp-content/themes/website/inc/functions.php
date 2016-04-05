<?php
/**
 *  This file custom function website
 *
 *  @package:   Huecis Wordpress
 *  @author :   Huecis Team
 *  @link   :   http://www.huecis.com
 *  @since  :   1.0
 *  User    :   Tuan Nguyen 
 *  Date    : 
 */


/****************************************************************
 *  Pagination 
 ****************************************************************/
function paging_nav($query=null,$page=0) {

    global $wp_query;

    if(isset($query) && $query != null){

        if($query){ $max=intval($query->max_num_pages) ;}

        if($page>0){$paged=$page;}

    }else{

        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

        $max   = intval( $wp_query->max_num_pages );
    }

    if($max<=1){return;}

        $html='<div class="row"><div class="col-sm-12 text-center"><ul class="pagination">' . "\n";

    if ($paged - 3 >= 1 )

        $html.='<li><a href="'.esc_url(get_pagenum_link( $paged-3 )).'"> << </a></li>';

    for ($i=$paged-2 ; $i<$max+2 ; $i++){

        if($i>=1 && $i<=$max ){

            if($paged == $i){

                $html.='<li class="active"><a href="'.esc_url(get_pagenum_link($i)).'">'.$i.'</a></li>';
            }else{

                $html.='<li><a href="'.esc_url(get_pagenum_link($i)).'">'.$i.'</a></li>';
            }
        }
    }

    if ($paged + 3 < $max)

        $html.='<li><a  href="'.esc_url(get_pagenum_link( $paged+3 )).'"> >> </a></li>';

        $html.='</ul></div></div>' . "\n";

    return $html;
}


/****************************************************************
 *  Get thumbnail youtube
 ****************************************************************/

function video_image($url){

    $image_url = parse_url($url);

    if($image_url['host'] == 'www.youtube.com' || $image_url['host'] == 'youtube.com'){

        $array = explode("&", $image_url['query']);

        return "http://img.youtube.com/vi/".substr($array[0], 2)."/0.jpg";

    }else if($image_url['host'] == 'www.youtu.be' || $image_url['host'] == 'youtu.be'){

        $array = explode("/", $image_url['path']);

        return "http://img.youtube.com/vi/".$array[1]."/0.jpg";

    }else if($image_url['host'] == 'www.vimeo.com' || $image_url['host'] == 'vimeo.com'){

        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/". substr($image_url['path'], 1).".php"));
        
        return $hash[0]["thumbnail_medium"];
    }

}

// Use: <img src="<?php echo video_image('youtube URL');