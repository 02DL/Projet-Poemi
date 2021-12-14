<article>
      <section class="container text-center" id="poemDay">
            <p>Poem of the day </p>

            <h2></br>
            <?php
            echo '" ' .$_SESSION['post_to_show'][0]. ' "';
            ?>
            </h2>
            <p>
            <?php
            echo ' by ' .$_SESSION['post_to_show'][1];
            ?>
            </p>
      </section>
</article>



