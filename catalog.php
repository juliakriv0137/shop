
<?php include 'config.php';?>
<?php
<div class="content">
            <div class="features_items">
                <h2>Последние товары</h2>
                <!--single item-->
                <?php foreach($latestProducts as $latestProduct):?>
                <div class="item">
                    <?php
                    if($latestProduct['is_new'])
                        echo "<img alt='' src='../../template/images/new.png' class='new'/>";
                    ?>
                    <a target="_blank" href="/product/<?php echo $latestProduct['id']?>">
                        <img alt="" width="268px" height="249px" src="<?php echo Product::getImage($latestProduct['id']); ?>" />
                    </a>
                    <p class="item_price"><?php echo $latestProduct['price']?>&nbspбел</p>
                    <a target="_blank" href="/product/<?php echo $latestProduct['id']?>">
                    <p class="item_name"><?php echo $latestProduct['name']?></p>
                    </a>
                    <a href="#" class="to_cart" data-id="<?php echo $latestProduct['id'];?>">
                        В корзину
                    </a>
                </div>
                <?php endforeach;?>
            </div>
            <div class="pagination">
                <?php echo $pagination->get();?>
            </div>
        </div>
    </div>
</section>
<div class="appendix"></div>