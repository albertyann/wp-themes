<?php 

get_template_part('silder');

$cat = array(
	'none'=>'1',
	'teacher'=>'3',
	'star'=>'5',
	'video'=>'7',
	'descript'=>'6',
	'news'=>'4',
	'media'=>'2',
	'school'=>'8',
);
?>

	<div class="main">
		<div class="container bg-main">
			<div class="span8">
				<div class="title line8">
					<h3>印象梦工坊</h3>
				</div>
				<div class="content video">
					<?php
						$videos = get_posts(array('category'=>$cat['video'], 'numberposts'=>6));
						foreach ($videos as $k => $v) {
							echo '<div class="item">';
							echo '<dl>';
							$thumbnail_id = get_post_thumbnail_id($v->ID);
							$img = wp_get_attachment_image($thumbnail_id, 'full');
							echo '<dd><a href="'.get_permalink($v->ID).'">'.$img.'</a></dd>';
							echo '<dt><a href="'.get_permalink($v->ID).'">'.$v->post_title.'</a></dt>';
							echo '</dl>';
							echo '</div>';
						}
						
					?>
				</div>
				<a class="more" href="#">更多</a>
			</div>
			<div class="span4">
				<div class="title line4">
					<h3>梦工坊最前线</h3>
				</div>
				<div class="news">
					<ul>
						<?php
						$news = get_posts(array('category'=>$cat['news'], 'numberposts'=>6));
						foreach ($news as $k => $v) {
							echo '<li><a href="'.get_permalink($v->ID).'">'.$v->post_title.'</a></li>';
						}
						?>
					</ul>
				</div>
				<a class="more" href="#">更多</a>
			</div>

			<div class="span12">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner.jpg">
			</div>

			<div class="span12">
				<div class="title line12">
					<h3>导师团队</h3>
				</div>
				<div class="content">
					
						<?php
						$teachers = get_posts(array('category'=>$cat['teacher'], 'numberposts'=>12, 'orderby'=>'post_date', 'order'=>'DESC'));
						foreach ($teachers as $k => $t) {
							$img_src = ay_extract_image_url($t->post_content);
							if(empty($img_src)){
								$img_src = get_stylesheet_directory_uri().'/img/avatar.jpg';
							}
							echo '<div class="teacher">';
							echo '<dl>';
							echo '<dd><a href="'.get_permalink($t->ID).'"><img src="'.$img_src.'" width="126" height="126"/></a></dd>';
							echo '<dt><a href="'.get_permalink($t->ID).'">'.$t->post_title.'</a></dt>';
							//$w = explode("#####", $t->post_content);
							//echo '<dt><span>'.$w[0].'</span></dt>';
							echo '<dt>'.$t->post_excerpt.'</dt>';
							echo '</dl>';
							echo '</div>';
						}
						?>
				</div>
				<a class="more" href="#">更多</a>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>实习基地</h3>
				</div>
				<div>
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/begin.jpg">
				</div>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>关于梦工坊</h3>
				</div>
				<div class="about">
					<div class="content">
					<p>高度决定视野，眼界决定世界。“传媒梦工坊"大学生就业系列活动是由中国中央电视台《奋斗》、《给你一个亿 梦想孵化器》等节目组倾力打造、针对传媒和财经及其相关领域的大学生量身设计的高品质活动。活动每年举办一届，在中央电视台证券资讯频道的指导下，由中央电视台原党委书记，常务副台长于广华亲自担任总顾问，以“高端、思想、影响力"为定位，携手央视著名主持人和中国企业家以及传媒界精英走进高校，解答高校学子困惑和疑问。同时，活动从全球选拔出几十名优秀的大学生来北京学习和实践。目前，活动已成功举办过四届。中国联想集团、蒙牛集团、磨铁图书以及《看天下》、《全球商业经典》、《第一财经周刊》等企业和媒体全程为“传媒梦工坊"扬帆起航。</p>
					</div>
					<div class="contact">
						<div class="about-title">
							<h2>我要报名</h2>
						</div>
						<table>
							<tr>
								<td class="r">电话</td>
								<td>010-52424661</td>
							</tr>
							<tr>
								<td class="r">靳老师</td>
								<td>138 1070 3089</td>
							</tr>
							<tr>
								<td class="r">刘老师</td>
								<td>132 6027 3148</td>
							</tr>
							<tr>
								<td class="r">邮箱</td>
								<td>cctvdreams@163.com</td>
							</tr>
							<tr>
								<td  colspan="2">
									<a href="http://e.weibo.com/CCTVDreams">新浪微博</a>
								
									<a href="http://page.renren.com/601340679">
										人人主页
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>合作媒体</h3>
				</div>
				<div class="media">
					<?php
					$medias = get_posts(array('category'=>$cat['media'], 'numberposts'=>6));
					foreach ($medias as $k => $v) {
						$thumbnail_id = get_post_thumbnail_id($v->ID);
						$img_src = wp_get_attachment_image($thumbnail_id, 'full');
						echo '<a href="http://www.cntv.cn/">'.$img_src.'</a>';
					}
					?>
				</div>
				<a class="more" href="#">更多</a>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>合作高校</h3>
				</div>
				<div class="school">
					<?php
					$schools = get_posts(array('category'=>$cat['school'], 'numberposts'=>6));
					foreach ($schools as $k => $v) {
						$thumbnail_id = get_post_thumbnail_id($v->ID);
						$img_src = wp_get_attachment_image($thumbnail_id, 'full');
						echo '<a href="'.get_permalink($v->ID).'">'.$img_src.'</a>';
					}
					?>
				</div>
				<a class="more" href="#">更多</a>
			</div>
		</div><!-- container -->
	</div>