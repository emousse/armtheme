<?php get_header(); ?>


<!-- Flickity HTML init -->
<div class="carousel"
     data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/1.jpg')">
            <div class="carousel-content container">
                <div class="col-md-12"><div class="carousel-title">
                    <h2>HELLO</h2>
                </div>
                <div class="carousel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div></div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/2.jpg')">
            <div class="carousel-content container">
                <div class="col-md-12"><div class="carousel-title">
                        <h2>HELLO</h2>
                    </div>
                    <div class="carousel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div></div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/3.jpg')">
            <div class="carousel-content container">
                <div class="col-md-12"><div class="carousel-title">
                        <h2>HELLO</h2>
                    </div>
                    <div class="carousel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div></div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/4.jpg')"></div>
        <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/5.jpg')"></div>
</div>

<section class="banner">
    <div class="container">
        <h2>
            TOUT POUR LE BOIS

        </h2>
        <a href="#" class="blue-btn">VENEZ VOIR</a>
    </div>
</section>

<section class="projects">
    <div class="container">
        <div class="projects-title">
            <ul class="filters-button-group">
                <li data-filter=".parquet">Parquets</li>
                <li data-filter=".cuisine">Cuisine</li>
                <li data-filter=".renovation">Renovation</li>
            </ul>
        </div>
        <div class="project-grids">
            <div class="projects-item parquet">
                <h3>Parquets</h3>
            </div>
            <div class="projects-item parquet">
                <h3>Parquets</h3>
            </div>
            <div class="projects-item parquet">
                <h3>Parquets</h3>
            </div>
            <div class="projects-item cuisine">
                <h3>Cuisine</h3>
            </div>
            <div class="projects-item cuisine">
                <h3>Cuisine</h3>
            </div>
            <div class="projects-item cuisine">
                <h3>Cuisine</h3>
            </div>
            <div class="projects-item renovation">
                <h3>Renovation</h3>
            </div>
            <div class="projects-item renovation">
                <h3>Renovation</h3>
            </div>
            <div class="projects-item renovation">
                + <h3>Renovation</h3>
            </div>
        </div>
    </div>
</section>

<div class="background-fixed">
    <div class="container">
        <div class="background-fixed-title">
            HELLO
        </div>
        <div class="background-fixed-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, ratione, voluptas. Aliquid amet debitis
            excepturi expedita fuga inventore iure quibusdam repellendus sint unde. Debitis dolorum nulla sunt tempore
            voluptas voluptatum!
        </div>
    </div>
</div>

<div class="container">
    <h1>Who are you, my warranty?!</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="blog-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="blog-post" id="blog-post-<?php the_ID() ?>">
                        <?php the_post_thumbnail('custom-size'); ?>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <span class="blog-post-time"><?php the_date(); ?></span>
                        <div class="blog-post-body">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="blog-post-more">
                            <a href="<?php the_permalink(); ?>">Lire la suite</a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

    <a href="#" class="blue-btn">Button</a>
    <a href="#" class="blue-btn">Button</a>
    <a href="#" class="blue-btn">Button</a>

    <p>My fellow Earthicans, as I have explained in my book 'Earth in the Balance'', and the much more popular ''Harry
        Potter and the Balance of Earth', we need to defend our planet against pollution. Also dark wizards. You
        wouldn't. Ask anyway!</p>
    <p>Daddy Bender, we're hungry. Soothe us with sweet lies. <strong> We're rescuing ya.</strong> <em> Son, as your
            lawyer, I declare y'all are in a 12-piece bucket o' trouble.</em> But I done struck you a deal: Five hours
        of community service cleanin'
        up that ol' mess you caused.</p>
    <h2>I'm sure those windmills will keep them cool.</h2>
    <p>I could if you hadn't turned on the light and shut off my stereo. They're like sex, except I'm having them! Say
        it in Russian! Five hours? Aw, man! Couldn't you just get me the death penalty?</p>
    <ol>
        <li>Bender, this is Fry's decision… and he made it wrong. So it's time for us to interfere in his life.</li>
        <li>Oh, how I wish I could believe or understand that! There's only one reasonable course of action now: kill
            Flexo!
        </li>
        <li>Check it out, y'all. Everyone who was invited is here.</li>
    </ol>

    <h3>Bite my shiny metal ass.</h3>
    <p>We don't have a brig. You don't know how to do any of those. I don't 'need' to drink. I can quit anytime I want!
        Hey! I'm a porno-dealing monster, what do I care what you think? I'm a thing.</p>
    <ul>
        <li>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored.</li>
        <li>Anyhoo, your net-suits will allow you to experience Fry's worm infested bowels as if you were actually
            wriggling through them.
        </li>
        <li>Come, Comrade Bender! We must take to the streets!</li>
    </ul>

    <p>Enough about your promiscuous mother, Hermes! We have bigger problems. Fry, we have a crate to deliver. Bender,
        quit destroying the universe! Pansy.</p>
    <p>Say it in Russian! In our darkest hour, we can stand erect, with proud upthrust bosoms. Kids don't turn rotten
        just from watching TV. Fry, you can't just sit here in the dark listening to classical music.</p>
    <p>I've been there. My folks were always on me to groom myself and wear underpants. What am I, the pope? Aww, it's
        true. I've been hiding it for so long. I love this planet! I've got wealth, fame, and access to the depths of
        sleaze that those
        things bring.</p>
    <p>It may comfort you to know that Fry's death took only fifteen seconds, yet the pain was so intense, that it felt
        to him like fifteen years. And it goes without saying, it caused him to empty his bowels. In your time, yes, but
        nowadays shut
        up! Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their
        stemcells.</p>
    <p>But I've never been to the moon! Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And
        "Put on your good vestments." File not found. Now what?</p>
    <p>No! I want to live! There are still too many things I don't own! Daylight and everything. I guess because my
        parents keep telling me to be more ladylike. As though! Is the Space Pope reptilian!? Too much work. Let's burn
        it and say we dumped
        it in the sewer.</p>
    <p>Fry! Stay back! He's too powerful! It doesn't look so shiny to me. Good news, everyone! There's a report on TV
        with some very bad news! Take me to your leader!</p>
    <p>But I know you in the future. I cleaned your poop. Throw her in the brig. I saw you with those two "ladies of the
        evening" at Elzars. Explain that. Bender, quit destroying the universe!</p>
    <p>Professor, make a woman out of me. What are you hacking off? Is it my torso?! 'It is!' My precious torso! In your
        time, yes, but nowadays shut up! Besides, these are adult stemcells, harvested from perfectly healthy adults
        whom I killed for
        their stemcells.</p>
    <p>Or a guy who burns down a bar for the insurance money! Aww, it's true. I've been hiding it for so long. Yes,
        except the Dave Matthews Band doesn't rock. Yes, if you make it look like an electrical fire. When you do things
        right, people won't
        be sure you've done anything at all.</p>
    <p>Hey, guess what you're accessories to. We'll go deliver this crate like professionals, and then we'll go home.
        Why yes! Thanks for noticing. Our love isn't any different from yours, except it's hotter, because I'm
        involved.</p>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
