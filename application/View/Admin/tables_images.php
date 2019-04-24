<div>
    <?php global $ozgaruvchi;?>
<?php foreach ($data['items'] as $item):?>
    <div class="portfolio">
        <div class="col-lg-6 portfolio-wrapper grid_box">
            <a href="<?=$ozgaruvchi['rasmAddress'].$item['rasmlar']?>" class="swipebox"  title="Image Title">
                <img style="width: 900px; height: 400px" src="<?= $ozgaruvchi['rasmAddress'].$item['rasmlar']?>" class="img-responsive" alt="">
                <a class="fa fa-trash-o fa-2x"  onclick="return confirm('Tasdiqlang!')" href="index.php?route=Admin/delete_images&id=<?=$item['id']?>"></a>
                <span class="zoom-icon"></span>
            </a>
        </div>
    </div>
<?php endforeach;?>
</div>
