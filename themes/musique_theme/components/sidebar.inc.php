<!-- Sticky content -->
<div class="sticky">
    <!--Section: Dynamic Content Wrapper-->
    <section>
        <div id="dynamic-content"></div>
    </section>
    <!--Section: Dynamic Content Wrapper-->

    <!--Sidebar-->
    <?php if ( is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
    <!--/.Sidebar-->
</div>