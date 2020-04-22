<?php
include 'Dancer.php';
//Tạo 2 hàng đợi (sử dụng SPL)
$queueMale = new SplQueue();
$queueFemale = new SplQueue();
//Thêm 4 dancer nam
$dancerMale1 = new Dancer('Nam', 'male');
$queueMale->enqueue($dancerMale1->getName());
$dancerMale2 = new Dancer('Minh', 'male');
$queueMale->enqueue($dancerMale2->getName());
$dancerMale3 = new Dancer('Linh', 'male');
$queueMale->enqueue($dancerMale3->getName());
$dancerMale4 = new Dancer('Hung', 'male');
$queueMale->enqueue($dancerMale4->getName());
//Thêm 3 dancer nữ
$dancerFemale1 = new Dancer('Quy', 'female');
$queueFemale->enqueue($dancerFemale1->getName());
$dancerFemale2 = new Dancer('Phuong', 'female');
$queueFemale->enqueue($dancerFemale2->getName());
$dancerFemale3 = new Dancer('Dung', 'female');
$queueFemale->enqueue($dancerFemale3->getName());
//Lần lượt tạo các cặp nhảy cho đến khi ai đó phải đợi
while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    $queueMale->dequeue();
    $queueFemale->dequeue();
}
//Thêm 3 bạn nữ
$dancerFemale4 = new Dancer('QuynhAnh', 'female');
$queueFemale->enqueue($dancerFemale4->getName());
$dancerFemale5 = new Dancer('Tam', 'female');
$queueFemale->enqueue($dancerFemale5->getName());
$dancerFemale6 = new Dancer('TienAnh', 'female');
$queueFemale->enqueue($dancerFemale6->getName());
while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    $queueMale->dequeue();
    $queueFemale->dequeue();
}
//Hiển thị số người đang phải đợi
while (!$queueMale->isEmpty()) {
    echo $queueMale->dequeue() . ' ';
}
while (!$queueFemale->isEmpty()) {
    echo $queueFemale->dequeue() . ' ';
}