<?php require_once("Stock.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="main">
        <!-- Section Red -->
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>

        <div class="section-red">
            <h2 class="category-red">Red Wine</h2>
            <hr>
        </div>
        <section class="card-area">
            <!-- Card: Ramon Bilbao -->
            <?php
                $RBilbao = new Stock("Ramon Bilbao", "Spain", "Rioja", "Crianza 2018", 8.90, "Red", 5);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--red">
                                    <div class="color-red"></div>
                                    <h2 class="card-front__heading"><?php echo $RBilbao->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $RBilbao->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/RBilbao.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $RBilbao->setDescription("A renewed classic, aged in oak barrels American. Versatile, fruity and balanced, a wine Created to enjoy at any time aroma and flavor of the best Tempranillo from Rioja");
                                    echo "<span class='inside-page__heading inside-page__heading--red'>Description</span><br><br>{$RBilbao->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechRed">
                                <?php
                                    echo "<span>Type</span> {$RBilbao->getType()} <br>";
                                    echo "<span>Country</span> {$RBilbao->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$RBilbao->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$RBilbao->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card: Habla -->
            <?php
                $HSilencio = new Stock("Habla del Silencio", "Spain", "Extremadura", "Crianza 2021", 11.60, "Red", 0);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--red">
                                    <div class="color-red"></div>
                                    <h2 class="card-front__heading"><?php echo $HSilencio->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $HSilencio->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/HSilencio.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $HSilencio->setDescription("A meaty and powerful wine. A temptation that is difficult to refuse, at a price that makes pampering ourselves on any occasion finally possible.");
                                    echo "<span class='inside-page__heading inside-page__heading--red'>Description</span><br><br>{$HSilencio->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechRed">
                                <?php
                                    echo "<span>Type</span> {$HSilencio->getType()} <br>";
                                    echo "<span>Country</span> {$HSilencio->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$HSilencio->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$HSilencio->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card: Emilio Moro -->
            <?php
                $EMoro = new Stock("Emilio Moro", "Spain", "Ribera del Duero", "Resalso 2021", 9.05, "Red", 5);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--red">
                                    <div class="color-red"></div>
                                    <h2 class="card-front__heading"><?php echo $EMoro->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $EMoro->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/EMoro.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $EMoro->setDescription("A renewed classic, aged in oak barrels American. Versatile, fruity and balanced, a wine Created to enjoy at any time aroma and flavor of the best Tempranillo from Rioja");
                                    echo "<span class='inside-page__heading inside-page__heading--red'>Description</span><br><br>{$EMoro->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechRed">
                                <?php
                                    echo "<span>Type</span> {$EMoro->getType()} <br>";
                                    echo "<span>Country</span> {$EMoro->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$EMoro->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$EMoro->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

        <!-- Section White -->
        <div class="section-white">
            <h2 class="category-white">White Wine</h2>
            <hr>
        </div>
        <section class="card-area">
            <!-- Card: Bera Vittorio -->
            <?php
                $BVitorio = new Stock("Bera Vittorio", "Italy", "Vino da Tavola", "Arcese 2020", 15.00, "White", 0);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--white">
                                    <div class="color-white"></div>
                                    <h2 class="card-front__heading"><?php echo $BVitorio->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $BVitorio->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/BVittorio.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $BVitorio->setDescription("Arcese is an Italian white wine from organic farming, direct pressing with whole clusters, spontaneous fermentation and aging for 9 months in stainless steel tanks.");
                                    echo "<span class='inside-page__heading inside-page__heading--white'>Description</span><br><br>{$BVitorio->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechWhite">
                                <?php
                                    echo "<span>Type</span> {$BVitorio->getType()} <br>";
                                    echo "<span>Country</span> {$BVitorio->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$BVitorio->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$BVitorio->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card: Julien Meyer -->
            <?php
                $JMeyer = new Stock("Julien Meyer", "France", "Vin de France", "À La Vie 2021", 14.35, "White", 5);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--white">
                                    <div class="color-white"></div>
                                    <h2 class="card-front__heading"><?php echo $JMeyer->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $JMeyer->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/JMeyer.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $JMeyer->setDescription("Beautiful blend of sylvaner and pinot blanc from old vines. Immediately, the liquid takes a fruity turn. Suspended slightly smoky notes.");
                                    echo "<span class='inside-page__heading inside-page__heading--white'>Description</span><br><br>{$JMeyer->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechWhite">
                                <?php
                                    echo "<span>Type</span> {$JMeyer->getType()} <br>";
                                    echo "<span>Country</span> {$JMeyer->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$JMeyer->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$JMeyer->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Card: Protos Verdejo -->
            <?php
                $PVerdejo = new Stock("Protos", "Spain", "Rueda", "Verdejo 2021", 6.75, "White", 0);
            ?>
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--white">
                                    <div class="color-white"></div>
                                    <h2 class="card-front__heading"><?php echo $PVerdejo->getTitle(); ?></h2>
                                    <p class="card-front__text-price"><?php echo $PVerdejo->getCaption(); ?></p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="assets/img/PVerdejo.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text"> 
                                <?php
                                    echo $PVerdejo->setDescription("Very fresh, with good acidity, intense flavor, fruity, balanced, complex, with a long and slightly bitter finish.");
                                    echo "<span class='inside-page__heading inside-page__heading--white'>Description</span><br><br>{$PVerdejo->getDescription()}";
                                ?>
                            </p>
                            <div class="infoTechWhite">
                                <?php
                                    echo "<span>Type</span> {$PVerdejo->getType()} <br>";
                                    echo "<span>Country</span> {$PVerdejo->getCountry()} <br>";
                                    echo "<span>Denomination</span> {$PVerdejo->getDenomination()} <br>";
                                    echo "<span>Stock</span> {$PVerdejo->getStock()}";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </main>
    <footer class="footer">
        <p class="footer-text">&copy; 2023 Created by Jose Torres</p>
    </footer>
</body>
</html>