
<?php $current_page_url = "https:www.thecouppublishinghouse.in/our-books.php";
$title = 'The Coup Publishing House | Our Books';
$description = 'Explore our extensive collection of books across various genres. From fantasy to academic, find the perfect book for your reading pleasure.';
$keywords = 'book collection, genres, academic books, fantasy books, new releases';
include_once 'components/navbar.php'; ?>

<!-- breadcrumbt start -->
<section id="breadcrumb" class="books">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Our Books</a></li>
        </ol>
    </nav>
</section>
<!-- breadcrumb end -->

<!-- New Books Launch section start-->
<?php include_once 'includes/books.php' ?>
<!-- New Books  launch section end -->

<!-- Newsletter section  start-->
<?php include_once 'includes/newsletter.php' ?>
<!-- section end -->

<!-- Footer -->
<?php include_once 'components/footer.php'; ?>