			<div id="sidebar">
                            
                            <div id="header">
                                    <div id="logo">&nbsp;</div>
                                    <div id="title">
                                        <p id="sitename"><? bloginfo('name') ?></p>
                                        <p id="tagline"><? bloginfo('description') ?></p>
                                    </div>
                            </div>
			
                            <ul>
                                    <li>
                                            <?php
                                            $menu_params = array(
                                                        'theme_location' => 'primary',
                                                        'container' => '',
                                                        'menu_id'=>'nav',
                                                        'echo'=>false
                                                        );
                                            $m = wp_nav_menu($menu_params);
                                            $m = str_replace('</li>', '<span></span>', $m);
                                            echo($m);
                                            ?>
                                    </li>
                                    <li>
                                                <?php dynamic_sidebar('Left Sidebar') ?>
                                    </li>
                            </ul>
				
				
			</div>