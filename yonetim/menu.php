<?php $filename = basename($_SERVER['REQUEST_URI']); ?>

<div class="sidebar-wrapper bg">


    <ul class="nav">
        <li class="<?php if ($filename == 'index.php') echo 'active'; ?>">
            <a href="index.php">

                <p>İlanlar</p>
            </a>
        </li>
        <li class="<?php if ($filename == 'mesaj.php') echo 'active'; ?>">
            <a href="mesaj.php">

                <p>Mesajlar</p>
            </a>
        </li>


        <li>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <p>
                    AYARLAR
                </p>
            </a>
        </li>

        <div id="collapseTwo" class="panel-collapse collapse">
            
                <li class="<?php if ($filename == 'sayfa.php?link=hakkimizda') echo 'active'; ?>">
                    <a href="sayfa.php?link=hakkimizda">

                        <p>Hakkımızda Sayfa İçeriği</p>
                    </a>
                </li>

                <li class="<?php if ($filename == 'linkler.php') echo 'active'; ?>">
                    <a href="linkler.php">

                        <p>Sosyal Medya Linkleri</p>
                    </a>
                </li>
            
        </div>

    </ul>
</div>