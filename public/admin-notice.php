<div class="error notice">
    <p>
        <strong>Error : </strong>
        The <em><?= $dependency->getCurrent(); ?></em> plugin won't execute
        because the following required plugins are not active :
		<em><?= esc_html( implode( ', ', $this->getPlugins() ) ) ?></em>.
        Please activate these plugins.
    </p>
</div>