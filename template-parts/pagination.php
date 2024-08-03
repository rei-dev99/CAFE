<?php if(paginate_links()) :?>
    <!-- pagination -->
    <div class="pagination nav-links">
        <?php
        echo paginate_links(
            array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '',
                'next_text' => '',
            )
        )
        ?>
    </div><!-- pagination -->
<?php endif; ?>