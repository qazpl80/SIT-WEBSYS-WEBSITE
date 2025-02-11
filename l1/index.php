<!DOCTYPE html>
<html lang="en">
<head>
    <title>World of Pets</title>
    <?php
        include "inc/head.inc.php";
    ?>
</head>
<body>
    <?php
        include "inc/nav.inc.php";
    ?>

    <?php
        include "inc/header.inc.php";
    ?>
    
    <main class="container">
        <section id="dogs">
            <h2>
                All About Dogs!
            </h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Poodles</h3>
                    <figure>
                        <img src="images/poodle_small.jpg" alt="Poodle" class="img-thumbnail"
                            title="View larger image...">
                        <figcaption>Standard Poodle</figcaption>
                    </figure>
                    <p>
                        Poodles are a group of formal dog breeds, the Standard
                        Poodle, Miniature Poodle and Toy Poodle. The height of a 
                        standard poodle is typically 15 inches between 18 and 24 
                        inches, although being over 15 inches specifically is what
                        sets apart a standard poodle from a miniature and toy poodle.
                    </p>
                </article>
                <article class="col-sm">
                <h3>Chihuahua</h3>
                <figure>
                    <img src="images/chihuahua_small.jpg" alt="Chihuahua" class="img-thumbnail"
                        title="View larger image...">
                    <figcaption>Chihuahua</figcaption>
                </figure>
                <p>
                    The Chihuahua is the smallest breed of dog, and is named
                    after the Mexican state of Chihuahua. There are two varieties of
                    Chihuahua - the Smooth Coat (smooth-haired) and the Long Coat (long-haired).
                    Both the Smooth and the Long Coats have their special attractions, are equally
                    easy to keep clean and well-groomed.
                </p>
                </article>
            </div>
        </section>
        <section id="cats">
            <h2>All About Cats!</h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Tabby</h3>
                    <figure>
                        <img src="images/tabby_small.jpg" alt="Tabby" class="img-thumbnail"
                            title="View larger image...">
                        <figcaption>Tabby Cat</figcaption>
                    </figure>
                    <p>
                        A tabby is any domestic cat with a distinctive 'M' shaped 
                        marking on its forehead, stripes by its eyes and across its cheeks,
                        along its back, and around its legs and tail, and (differing by tabby type),
                        characteristic striped, dotted, lined, flecked, banded or swirled patterns on the 
                        body--neck, shoulders, sides, flanks, chest and abdomen. "Tabby" is not a breed of cat
                        but a coat type seen in almost all genetic lines of domestic cats, regardless of status.
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Calico</h3>
                    <figure>
                        <img src="images/calico_small.jpg" alt="Calico" class="img-thumbnail"
                            title="View larger image...">
                        <figcaption>Calico Cat</figcaption>
                    </figure>
                    <p>
                        A calico cat is a domestic cat of any breed with a tri-color coat. 
                        The calico cat is most commonly thought of as being 
                        typically 25% to 75% white with large orange and black patches.
                        The size of the patches can vary from a fine speckled pattern to 
                        large areas of color. 
                    </p>
                </article>
            </div>
        </section>
    </main>
    <?php
        include "inc/footer.inc.php";
    ?>
    </body>
</html>