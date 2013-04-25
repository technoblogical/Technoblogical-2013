      <footer>
        <small class="buttonlogical">Copyright <script type="text/javascript">
         var technoblogicalCopyrightDate=new Date();
         document.write(technoblogicalCopyrightDate.getFullYear());
         </script>
          by <a href="<?php echo home_url()."/"; ?>"><?php bloginfo('name'); ?></a></small>
      </footer>  
    </div> <!-- allEncompassingDiv -->
    <span id="backgroundTitle">
     <a href="<?php echo home_url()."/"; ?>"><?php bloginfo('name'); ?></a>
     <br/>
     <?php echo get_bloginfo ( 'description' );  ?>
    </span>
    <?php wp_footer(); ?> 
 </body>
</html>