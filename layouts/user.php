<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SIMBOLON SHOPPING</title>

      <link rel="shortcut icon" href="<?=AST ?>/img/logo.ico">
      <link rel="stylesheet" href="<?=AST ?>/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="<?=AST ?>/img/s.png" class="brand">
                  <div class="user">SIMBOLON SHOPPING</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="<?= URL ?>/Home/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Beranda
                              </a>
                        </li>
                        <li>
                              <a href="<?= URL ?>/Kategori/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Kategori
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/User/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> User
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Produk/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Produk
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Keranjang/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Keranjang
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Pemesanan/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Pemesanan
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/DetPemesanan/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Detail Pemesanan
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
				<?php require_once ROOT . "app/views/" . $view. ".php" ?>

    
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Harun Yahya from SI-2
            </footer>
      </main>

</body>

</html>