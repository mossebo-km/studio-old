<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 13.09.17
 * Time: 11:07
 */

$count_views = get_field('count-views');

if(isset($count_views)) {

    $count_views = $count_views + 1;

    update_field('count-views', $count_views);

    //echo $count_views;

}

else {

    $count_views = 1;

    update_field('count-views', $count_views);

    //echo 'счетчик установлен на 1';
}
