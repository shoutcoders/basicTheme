

<footer>
 
<div class="container-fluid allfooter">
    <div class="col-md-4">
    <?php
    if(is_active_sidebar('footer-1')){
        dynamic_sidebar('footer-1');
    }
    ?>
    </div>
    
    <div class="col-md-4">
    <?php
    if(is_active_sidebar('footer-2')){
        dynamic_sidebar('footer-2');
    }
    ?>
    </div>

    <div class="col-md-4">
        <?php
            if(is_active_sidebar('footer-3')){
            dynamic_sidebar('footer-3');
        }
    ?>
    </div>
</div>

<div class="container-fluid copyright">
    <p>
    <?php
    if(is_active_sidebar('footer-4')){
        dynamic_sidebar('footer-4');
    }
    ?>

    </p>
</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>