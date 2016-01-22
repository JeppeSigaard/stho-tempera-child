<?php 

add_shortcode('list_form',function(){
    
    ob_start(); ?>
    <div class="form-wrap">
        <form method="post" action="<?php echo admin_url('admin-ajax.php') ?>">
            <input type="hidden" name="action" value="submit_form" />
            <input type="hidden" name="do" value="add_to_list_bolig" />
            <div>
                <input class="widefat" type="text" name="list_name" required />
                <label>Navn</label>
            </div>
            <div>
                <input class="widefat" type="email" name="list_email" required/>
                <label>Email</label>
            </div>
            <div> 
                <input class="widefat" type="text" name="list_phone" required/>
                <label>Telefonnummer</label>
            </div>
            <div>
                <input class="widefat" type="text" name="list_address"/>
                <label>Nuværende adresse</label>
            </div>
             <div>
                <input class="widefat" type="text" name="list_post"/>
                <label>Postnummer</label>
            </div>
             <div>
                <input class="widefat" type="text" name="list_city"/>
                <label>By</label>
            </div>
            <div>
                <a href="#" class="button submit ">Send</a>
            </div>
        </form>
    </div>
    <?php return ob_get_clean();
});