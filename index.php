<!DOCTYPE html>
<html lang="en">
    <?php require_once('./src/head.php') ?>
    <body>
        <?php require_once('./src/header.php') ?>
        <main>
            <section id="home" class="container-fluid">
                <article class="row align-items-center justify-content-center">
                    <h1 class="d-none d-md-block col-md-8 col-lg-6 col-xl-5 text-center">
                        FaroWorld
                        <p>Ship's management</p>
                    </h1>
                </article>
            </section>
            <section class="container-fluid">
                <article  id="aboutus" class="row justify-content-center">
                    <h2 class="col-12 col-md-10 col-xl-8 text-center">About us</h2>
                    <p class="col-12 col-md-10 col-xl-8">
                        FAROWORLD is a young company made up of qualified professionals, Captains
                        and Chief Engineers of the Uruguayan merchant marine; with more than 20
                        years of experience in the shipping sector.
                        We develop our activities by providing maritime services (Marine Survey & Port
                        Captain) in all ports of Uruguay to P&I, shipowners and shipping agencies.
                        From the center of MERCOSUR providing quality and trustworthy services in
                        each task that is entrusted to us.
                    </p>
                    <h3 class="col-12 col-md-10 col-xl-8 text-center">MISSION</h3>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Develop quality professional services, cultivating trust with each client. Enhance the values of our team, which is permanently trained in the various matters of the shipping sector and port operations.
                    </p>
                    <h3 class="col-12 col-md-10 col-xl-8 text-center">VISSION</h3>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Aspire to perfection giving the best of ourselves. At FAROWORLD we know the challenges of the sea and we value its teachings. We adapt by responding to the constant evolution of maritime operations, in an effective and timely manner.
                    </p>
                    <h3 class="col-12 col-md-10 col-xl-8 text-center">VALUES</h3>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Professionalism, Confidence, Spirit of improvement and Vocation of service are the various North's that lead the directions of FAROWORLD.
                    </p>
                </article>
                <article id="operations" class="row ">
                    <h2 class="col-12 text-center">Operations Perfomed</h2>
                </article>  
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner justify-content-center text-center align-content-center">
                        <figure class="carousel-item active">
                            <img src="img/Operations/01.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/02.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/03.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/04.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/05.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/06.jpg" class="img-fluid" alt="...">
                        </figure>
                        <figure class="carousel-item">
                            <img src="img/Operations/07.jpg" class="img-fluid" alt="...">
                        </figure>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <article id="ourservices" class="row card-group justify-content-center">
                    <h2 class="col-12 col-md-10 col-xl-8 text-center">Our Services</h2>
                    <h3 class="col-12 col-md-10 col-xl-8 text-center">Port Captain</h3>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Our port captain service provides a crucial link with our clients to make decisions
                        agreed in real time during the operation of the ship.
                    </p>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        We work closely with the
                        port operator, making
                        information available 24
                        hours a day from and to
                        the ship.
                    </p>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Daily reports and pictures
                        with competent
                        commentary and advice
                        will reveal every situation
                        on board throughout the
                        entire stopover.
                    </p>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        The main duties and responsibilities of our Port Captain are to protect the interests of
                        our clients; avoiding additional expenses, helping to guarantee safe, positive and agile
                        results.
                    </p>
                    <p class="col-12 col-md-10 col-xl-8 text-left">
                        Having a representative on the
                        scene to coordinate and
                        supervise your vessels will
                        greatly improve performance,
                        reliability and response to
                        various situations; which will
                        translate into overall efficiency
                        and savings.
                    </p>
                </article>
            </section>
        </main>
        <?php require_once('./src/footer.php') ?>
    </body>
</html>