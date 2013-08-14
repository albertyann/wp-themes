<?php 

get_template_part('silder');

?>

	<div class="main">
		<div class="container bg-main">
			<div class="span8">
				<div class="title line8">
					<h3>印象梦工坊</h3>
				</div>
				<div class="content video">
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(362);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/ms.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(362);?>">传媒梦工坊名师讲堂</a></dt>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(857);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/xc.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(857);?>">传媒梦工坊形象片</a></dt>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(370);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/ds.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(370);?>">导师心中梦工坊</a></dt>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(380);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/xs.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(380);?>">全球梦工坊学生送祝福</a></dt>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(378);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/cgb.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(378);?>">陈光标代言传媒梦工坊</a></dt>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dd><a href="<?php echo get_permalink(366);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/rz.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(366);?>">在传媒梦工坊的日子</a></dt>
						</dl>
					</div>
				</div>
				<a class="more" href="<?php echo get_category_link(7);?>">更多</a>
			</div>
			<div class="span4">
				<div class="title line4">
					<h3>梦工坊最前线</h3>
				</div>
				<div class="news">
					<ul>
						<li class="boost"><a href="http://cctvdreams.com/?p=386">第五届CCTV奋斗传媒梦工坊大学生就业系列活动说明</a></li>
						<?php
						$news = get_posts(array('category'=>4, 'numberposts'=>8));
						foreach ($news as $k => $v) {
							echo '<li><a href="'.get_permalink($v->ID).'">'.$v->post_title.'</a></li>';
						}
						?>
					</ul>
				</div>
				<a class="more" href="<?php echo get_category_link(4);?>">更多</a>
			</div>

			

			<div class="span12">
				<div class="title line12">
					<h3>导师团队</h3>
				</div>
				<div class="content">
					
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(61);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/byj.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(61);?>">保育钧</a></dt>
							<dt><span>原全国政协副秘书长</span></dt>
							<dt>历任人民日报社组长、部主任、副总编兼秘书长、副总编辑兼华东分社社长。1996年调任全国工商联副主席。1998年起任全国政协副秘书长，第十届全国政协社会法制委员会委员。</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(66);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/mys.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(66);?>">茅于轼</a></dt>
							<dt><span>著名经济学家</span></dt>
							<dt>2012“米尔顿—弗里德曼自由奖”得主。1929年1月14日出生于南京，曾担任亚洲开发银行注册顾问，中国环境与发展国际合作委员会能源工作组中方专家，联合国开发计划署顾问。</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(56);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/aq2.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(56);?>">阿丘</a></dt>
							<dt><span>中央电视台著名节目主持人</span></dt>
							<dt>2003年4月开始在中央电视台新闻评论部任《社会记录》节目主持人。 先后主持过《人物新周刊》、《天天故事汇》、《奋斗》等栏目</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(392);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/wzd.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(392);?>">王志东</a></dt>
							<dt><span>新浪网创始人</span></dt>
							<dt>中国互联网产业十位最有影响力企业领袖之首。成功创建了中国第一门户大网新浪而被称作“中国网络之王”，曾领导新浪网成为全球最大中文门户并于2000年在NASDAQ成功上市</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(810);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/cgb2.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(810);?>">陈光标</a></dt>
							<dt><span>“中国首善”</span></dt>
							<dt>江苏黄埔再生资源利用有限公司董事长。1998年开始慈善事业，2008年汶川大地震后第一时间出钱出力救灾，被国务院总理温家宝称为“有良知、有感情、心系灾区的企业家”</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(76);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/zxn.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(76);?>">张晓楠</a></dt>
							<dt><span>中央电视台新闻频道《新闻调查》出镜记者</span></dt>
							<dt>第六届CCTV全国电视节目主持人大赛铜奖，全国十强。曾任央视财经频道（CCTV-2）记者，北京电视台主持人。</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(62);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/sc.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(62);?>">胜春</a></dt>
							<dt><span>中央电视台节目主持人</span></dt>
							<dt>曾主持过的大型节目：2002年中央电视台"五一"特别节目《中国制造》，中央三套"五一"特别节目《世纪彩虹》以及《综艺大观》等。现在主持央视十套的《原来如此》，颇受好评。</dt>
						</dl>
					</div>
					<div class="teacher">
						<dl>
							<dd><a href="<?php echo get_permalink(58);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/index/wkq.jpg"></a></dd>
							<dt><a href="<?php echo get_permalink(58);?>">王克勤</a></dt>
							<dt><span>中国著名调查记者</span></dt>
							<dt>曾任《中国经济时报》首席记者、《经济观察报》总编助理。是中国当代著名揭黑记者，被业界称之为“、“中国揭黑记者第一人”。</dt>
						</dl>
					</div>
				</div>
				<a class="more" href="<?php echo get_category_link(3);?>">更多</a>
			</div>

			<div class="span12" style="margin-top:10px;margin-left:21px">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/banner.jpg">
			</div>

			

			<div class="span12 about-wrap">
				<div class="title line-none">
					<h3>关于梦工坊</h3>
				</div>
				<div class="about">
					<div class="content">
					<p>高度决定视野，眼界决定世界。“传媒梦工坊"大学生就业系列活动是由中国中央电视台《奋斗》、《给你一个亿 梦想孵化器》等节目组倾力打造、针对传媒和财经及其相关领域的大学生量身设计的高品质活动。活动每年举办一届，在中央电视台证券资讯频道的指导下，由中央电视台原党委书记，常务副台长于广华亲自担任总顾问，以“高端、思想、影响力"为定位，携手央视著名主持人和中国企业家以及传媒界精英走进高校，解答高校学子困惑和疑问。同时，活动从全球选拔出几十名优秀的大学生来北京学习和实践。目前，活动已成功举办过四届。中国联想集团、蒙牛集团、磨铁图书以及《看天下》、《全球商业经典》、《第一财经周刊》等企业和媒体全程为“传媒梦工坊"扬帆起航。</p>
					</div>
					<div class="contact">
						<div class="about-title">
							<a href="<?php echo get_permalink(6);?>"><h2>我要报名</h2></a>
						</div>
						<table>
							<tr>
								<td>电&nbsp;&nbsp;话</td>
								<td>：010-52424661</td>
							</tr>
							<tr>
								<td>靳老师</td>
								<td>：185 0022 3152</td>
							</tr>
							<tr>
								<td>刘老师</td>
								<td>：189 1059 5681</td>
							</tr>
							<tr>
								<td>邮&nbsp;&nbsp;箱</td>
								<td>：cctvdreams@163.com</td>
							</tr>
							<tr>
								<td>新浪微博</td>
								<td>：<a href="http://e.weibo.com/cctvdreams" target="_blank">@传媒梦工坊</a></td>
							</tr>
							<tr>
								<td>人人主页</td>
								<td>：<a target="_blank" href="http://page.renren.com/601340679" title="央视奋斗传媒梦工坊大学生就业系列活动">央视传媒梦工坊</a></td>
							</tr>
							<tr>
								<td>官方微信</td>
								<td>：CCTV_MGF</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>实习基地</h3>
				</div>
				<div class="base">
					<a target="_blank" href="<?php echo get_page_link(5);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/tv.jpg" /></a>
					<a target="_blank" href="<?php echo get_page_link(5);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/media.jpg" /></a>
					<a target="_blank" href="<?php echo get_page_link(5);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/net.jpg" /></a>
					<a target="_blank" href="<?php echo get_page_link(5);?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/business.jpg" /></a>
				</div>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>合作媒体</h3>
				</div>
				<div class="media">
					<a href="http://cctvcj.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/cctv.jpg"/></a>
					<a href="http://www.cntv.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/cntv.jpg"/></a>
					<a href="http://www.ifeng.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/ifeng.jpg"/></a>
					<a href="http://www.vistastory.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/vista.jpg"/></a>
					<a href="http://www.cbnweek.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/cbn.jpg"/></a>
					<a href="http://www.global-business.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/global.jpg"/></a>
					<a href="http://www.people.com.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/people.jpg"/></a>
					<a href="http://www.renren.com"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/renren.jpg"/></a>
					<a href="http://www.renren.com"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/medium/youku.jpg"/></a>
				</div>
				<a class="more" target="_blank" href="<?php echo get_page_link(396);?>">更多</a>
			</div>

			<div class="span12">
				<div class="title line-none">
					<h3>合作高校</h3>
				</div>
				<div class="school">
					<a href="http://www.xmu.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/1.jpg"/></a>
					<a href="http://www.cuc.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/2.jpg"/></a>
					<a href="http://www.jlu.edu.cn/newjlu/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/3.jpg"/></a>
					<a href="http://www.hnu.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/4.jpg"/></a>
					<a href="http://www.ncu.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/5.jpg"/></a>
					<a href="http://www.brown.ac.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/6.jpg"/></a>
					<a href="http://www.tsinghua.edu.cn/publish/th/index.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/7.jpg"/></a>
					<a href="http://www.ruc.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/8.jpg"/></a>
					<a href="http://www.hust.edu.cn/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/university/9.jpg"/></a>
				</div>
				<a class="more" target="_blank" href="<?php echo get_page_link(393);?>">更多</a>
			</div>
		</div><!-- container -->
	</div>