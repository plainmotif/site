<div class="container-box">
    <h1><?= $this->meta->title; ?></h1>
<?php if (isset($this->meta->subtitle)) { ?>
    <h2><?= $this->meta->subtitle; ?></h2>
<?php } ?>
    <div class="content-box">
        <div class="box-meta">
            <p>Date: <?= $this->meta->date; ?></p>
            <p>Time: <?= $this->meta->time; ?></p>
        </div>
        <?= $this->content; ?>
    </div>
</div>
<div class="container-box">
    <h1>Static Content 1</h1>
    <h2>Some subtitle 1</h2>
    <p>Hello Again!</p>
</div>
<div class="container-box">
    <h1>Static Content 2</h1>
    <h2>Subtitle 2</h2>
    <p>Hello for the third time!</p>
</div>
