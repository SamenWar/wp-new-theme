                    <div class="col-lg-4">
                        <div class="team-member">
                        <?php the_post_thumbnail() ?>
                        <h4><?php the_title() ?></h4>
                            <p class="text-muted"><?php the_excerpt()?></p>
                            <p>Дата публикации:<?php the_date('d F Y') ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-dark">Читать!</a>
                            
            <?php the_field('автор') ?>
            <?php the_field('источник') ?>
                        </div>
                    </div>

                 