 <div class="graphs">
        <h3 class="blank1">Basic Tables</h3>
        <div class="xs tabls">
            <div class="bs-example4" title="Tablitsa" data-example-id="contextual-table">
                <table class="panel panel-grey table table-bordered">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Mavzu</th>
                        <th>Matn</th>
                        <th>Sana</th>
                        <th>Rasm</th>
                        <th>Qoshimcha</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php global $ozgaruvchi?>
                    <?php foreach ($data['items'] as $item):?>
                    <tr class="active">
                        <th scope="row"><?=$item['id']?></th>
                        <td><?=$item['mavzu']?></td>
                        <td><?= Format::cutText($item['matn'], 100) ?></td>
                        <td><?= Format::dateFormat($item['sana'])?></td>
                        <td><img src="<?=$ozgaruvchi['rasmAddress'].$item['thumb']?>" alt="" class="img-responsive zoom-img"></td>
                        <td>
                            <a class="fa fa-pencil fa-2x" href="index.php?route=Admin/update_news&id=<?=$item['id']?>"></a>
                            <a class="fa fa-trash-o fa-2x" onclick="return confirm('Tasdiqlang!')" href="index.php?route=Admin/delete_news&id=<?=$item['id']?>" ></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
