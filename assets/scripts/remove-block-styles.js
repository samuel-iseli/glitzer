// Remove Block Style Backend 

// Show all block Styles
wp.domReady(() => {
	// find blocks styles
	wp.blocks.getBlockTypes().forEach((block) => {
		if (_.isArray(block['styles'])) {
			console.log(block.name, _.pluck(block['styles'], 'name'));
		}
	});
	
	// remove, only without Adminimize
	// wp.data.dispatch('core/edit-post').removeEditorPanel('post-status'); // Status and Visibility
	// wp.data.dispatch('core/edit-post').removeEditorPanel('taxonomy-panel-category'); // Categories
	// wp.data.dispatch('core/edit-post').removeEditorPanel('taxonomy-panel-TAXONOMY-NAME'); // custom taxonomy
	// wp.data.dispatch('core/edit-post').removeEditorPanel('taxonomy-panel-post_tag'); // Tags
	// wp.data.dispatch('core/edit-post').removeEditorPanel('featured-image'); // Featured Image
	// wp.data.dispatch('core/edit-post').removeEditorPanel('post-excerpt'); // Excerpt
	// wp.data.dispatch('core/edit-post').removeEditorPanel('post-link'); // permalink
	// wp.data.dispatch('core/edit-post').removeEditorPanel('page-attributes'); // page attributes
	// wp.data.dispatch('core/edit-post').removeEditorPanel('discussion-panel'); // Discussion
	
	wp.blocks.unregisterBlockStyle('core/image', 'rounded');
	wp.blocks.unregisterBlockStyle('core/image', 'default');
	// quote
	wp.blocks.unregisterBlockStyle('core/quote', 'default');
	wp.blocks.unregisterBlockStyle('core/quote', 'large');
	// button
	wp.blocks.unregisterBlockStyle('core/button', 'fill');
	wp.blocks.unregisterBlockStyle('core/button', 'outline');
	// pullquote
	wp.blocks.unregisterBlockStyle('core/pullquote', 'default');
	wp.blocks.unregisterBlockStyle('core/pullquote', 'solid-color');
	// separator
	wp.blocks.unregisterBlockStyle('core/separator', 'default');
	wp.blocks.unregisterBlockStyle('core/separator', 'wide');
	wp.blocks.unregisterBlockStyle('core/separator', 'dots');
	// table
	wp.blocks.unregisterBlockStyle('core/table', 'regular');
	wp.blocks.unregisterBlockStyle('core/table', 'stripes');
	// social-links
	wp.blocks.unregisterBlockStyle('core/social-links', 'default');
	wp.blocks.unregisterBlockStyle('core/social-links', 'logos-only');
	wp.blocks.unregisterBlockStyle('core/social-links', 'pill-shape');
	
});

