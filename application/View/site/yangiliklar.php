<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #395a5c;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>
<body>
    <div class="blog-content">
        <div class="container">
            <div class="blog-content-head text-left">
                <h3>Yangiliklar</h3>
            </div>
            <div class="section group">
                <?php foreach ($data['list_news'] as $item):?>
                    <div class="blog-grids">
                    <div class="cont span_2_of_3">
                        <div class="col-md-8 blog-grid">
                                <div class="blog_posts">
                                    <div class="blog_date">
                                    <figure><p><?=$item['sana']?></p></figure>
                                </div>
                                <div class="blog_desc">
                                    <div class="blog_heading">
                                        <a href=""><?=$item['mavzu']?></a>
                                    </div>
                                    <div class="section group example">
                                        <div class="col blog_1_of_2">
                                            <div class="blog_img">
                                                <a href=""><img src="uploads/<?=$item['thumb']?>" alt="image" class="img-responsive zoom-img"></a>
                                            </div>
                                        </div>
                                            <div class="col blogdata_1_of_2">
                                            <div class="blog_data">
                                                <p><?= Format::cutText($item['matn'], 30) ?></p>
                                                <div class="more">
                                                    <span><a id="myBtn" class="button outline-outward hvr-rectangle-in">Read More</a></span>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                            <?php endforeach;?>
                <div>
                    <?php foreach ($data['list_news'] as $item):?>
                        <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                                <div class="blog_date">
                                    <figure><p><?=Format::dateFormat($item['sana'])?></p></figure>
                                </div><br>
                                <div class="tema">
                                    <p><?=$item['mavzu']?></p>
                                </div>
                                <div class="para">
                                    <p><?=$item['matn']?></p>
                                </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
        
        <div class="content-pagenation">
            <li><a>1</a></li>
            <li><a>2</a></li>
            <li><a>3</a></li>
            <div class="clearfix"> </div>
        </div>
                </div>

    <!-- content-section-ends -->
    </body>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    function myFunction() {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>0
