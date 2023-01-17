<?php
/********************************************
*   
* Template Name: CSRT Roster
*
*********************************************/
 
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>
			<?php do_action('generate_before_main_content'); ?>
			
			<?php if ( have_posts() ) : ?>	
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; endif; wp_reset_postdata();?>


		  <div id="csrt-roster-container">	
			<?php 
					$csrt_roster_args = array(
							'post_type' 		=> 'csrt_roster',
							'orderby'   		=> 'post_date',
							'order' 			=> 'DESC',
							'posts_per_page' 	=> '1'								
					); 
					
           		$csrt_roster = new WP_Query( $csrt_roster_args ); 
       		?>	
<!-- LOOP START -->
           <?php 
           		// Get the newest CSRT Roster
           		if ( $csrt_roster->have_posts() ) : while( $csrt_roster->have_posts() ) :  $csrt_roster->the_post(); 

           			// Get the date that was entered on the roster
           			$roster_date =  get_field( 'csrt-roster-date' );  // string

           			// Call the function to add slashes between the month and day of the date
           			$roster_formatted_date = add_slashes_to_date( $roster_date );
			?>			
				<div>
					<table id="csrt-roster-table">
						<tbody>
							<tr>
								<th colspan="3" class="csrt-main-heading">CSRT ROSTER</th>
							</tr>
							<tr>
								<th class="column-1 roster-shift"><?php the_field( 'csrt-roster-shift' ) ?> - shift</th>
								<th class="column-2"></th>
								<th class="column-3 roster-date"><?php echo $roster_formatted_date; ?></th>
							</tr>
							<tr>
								<th class="csrt-roster-border-bottom">Team Positions</th>
								<th class="csrt-roster-border-bottom">Priority</th>
								<th class="csrt-roster-border-bottom">Assignment</th>
							</tr>
							<tr>
								<td>CRT Group Supervisor</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'crt-group-supervisor' ) ?></td>
							</tr>
							<tr>
								<td>Logistics/Comms</td>
								<td>2nd Priority</td>
								<td><?php the_field( 'logistics-communications' ) ?></td>
							</tr>
							<tr>
								<td>Safety/Monitoring</td>
								<td>2nd Priority</td>
								<td><?php the_field( 'safety-monitoring' ) ?></td>
							</tr>
							<tr>
								<td>Entry/Rescue Supervisor</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'entry-rescue-supervisor' ) ?></td>
							</tr>
							<tr>
								<td>Entrant - 1</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'entrant-1' ) ?></td>
							</tr>
							<tr>
								<td>Entrant - 2</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'entrant-2' ) ?></td>
							</tr>
							<tr>
								<td>RIT/Back Up - 1</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'rit-backup-1' ) ?></td>
							</tr>
							<tr>
								<td>RIT/Back Up - 2</td>
								<td>Technician/1st Priority</td>
								<td><?php the_field( 'rit-backup-2' ) ?></td>
							</tr>
							<tr>
								<td>Cutter</td>
								<td>2nd Priority</td>
								<td><?php the_field( 'cutter' ) ?></td>
							</tr>
							<tr>
								<td>Air Controller</td>
								<td>2nd Priority</td>
								<td><?php the_field( 'air-controller' ) ?></td>
							</tr>
							<tr>
								<td>Runner/Tender</td>
								<td></td>
								<td><?php the_field( 'runner-tender-1' ) ?></td>
							</tr>
							<tr>
								<td>Runner/Tender</td>
								<td></td>
								<td><?php the_field( 'runner-tender-2' ) ?></td>
							</tr>
							<tr>
								<td>Runner/Tender</td>
								<td></td>
								<td><?php the_field( 'runner-tender-3' ) ?></td>
							</tr>
							<tr>
								<td>Runner/Tender</td>
								<td></td>
								<td><?php the_field( 'runner-tender-4' ) ?></td>
							</tr>
						</tbody>
					</table>
				</div>
                       <?php endwhile; endif; wp_reset_postdata(); ?>
                       <br><br>
                       <a href="/special-ops/" class="go-back-link">Go back to the Special Ops page</a>
                       <br><br>
                </div>


			<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
do_action('generate_sidebars');
get_footer();