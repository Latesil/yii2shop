<div class="panel-heading">
    <h4 class="panel-title">
        <?php if( isset($category['childs']) ): ?>
            <a data-toggle="collapse" data-parent="#accordian" href="<?= '#' . strtolower($category['name']) ?>">
        <?php else: ?>
                <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id'] ]) ?>">
        <?php endif; ?>
            <?= $category['name'] ?>
            <?php if( isset($category['childs']) ): ?>
                <span class="badge pull-right">
                    <i class="fa fa-plus"></i>
                </span>
            <?php endif; ?>
        </a>
        <div id="<?= strtolower($category['name']) ?>" class="panel-collapse collapse">
            <div class="panel-body">
                    <?php if( isset($category['childs']) ): ?>
                        <ul class="yarr">
                            <?= $this->getMenuHtml($category['childs']) ?>
                        </ul>
                    <?php endif; ?>
            </div>
        </div>
    </h4>
</div>