<?
global $page;

$limit = 9;
$SelectAll = mysqli_query($connection, "SELECT COUNT FROM `commodity`");
$all = mysqli_num_rows($SelectAll);
$pageCount = ceil($all / $limit);

for ($i = 1; $i <= $pageCount; $i++) {
    if($page == $i){
        $class= ' ';
    }
    else{
        $class = 'class ="active"';
    }
    echo '<li class=" pagination-item">
        <a class="button-inner '.$class.'" data-id='.$i.' href="catalog.php?page='.$i.'">'.$i.'</a>
    </li>';
}