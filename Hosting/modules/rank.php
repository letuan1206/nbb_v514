<?php
/**
 * @author		NetBanBe
 * @copyright	2005 - 2012
 * @website		http://netbanbe.net
 * @Email		nwebmu@gmail.com
 * @HotLine		094 92 92 290
 * @Version		v5.12.0722
 * @Release		22/07/2012
 
 * WebSite hoan toan duoc thiet ke boi NetBanBe.
 * Vi vay, hay ton trong ban quyen tri tue cua NetBanBe
 * Hay ton trong cong suc, tri oc NetBanBe da bo ra de thiet ke nen NWebMU
 * Hay su dung ban quyen duoc cung cap boi NetBanBe de gop 1 phan nho chi phi phat trien NWebMU
 * Khong nen su dung NWebMU ban crack hoac tu nguoi khac dua cho. Nhung hanh dong nhu vay se lam kim ham su phat trien cua NWebMU do khong co kinh phi phat trien cung nhu san pham tri tue bi danh cap.
 * Cac ban hay su dung NWebMU duoc cung cap boi NetBanBe de NetBanBe co dieu kien phat trien them nhieu tinh nang hay hon, tot hon.
 * Cam on nhieu!
 */
 
if ( !isset($_SESSION['mu_username']) ) {
	echo "<div align=center><font color=red><b>Hãy Login trước khi thực hiện chức năng này</b></font></div>";
	include('modules/home.php');
} else 
{
	if(isset($_GET['act'])) $act = $_GET['act'];
    else $act = null;
		switch ($act)
		{
            case 'rankrs':  include('modules/rank/rankrs.php'); break;
            case 'rankrs2':  include('modules/rank/rankrs2.php'); break;
            case 'rankrs3':  include('modules/rank/rankrs3.php'); break;
            case 'rankpointrs': include('modules/rank/rankpointrs.php'); break;
            case 'rankpointrs2': include('modules/rank/rankpointrs2.php'); break;
            case 'ranking': include('modules/rank/ranking.php'); break;
            case 'ranking_guild': include('modules/rank/ranking_guild.php'); break;
            case 'rank50': include('modules/rank/rank50.php'); break;
            case 'rank_tuluyen': include('modules/rank/rank_tuluyen.php'); break;
            case 'rank_phucloi': include('modules/rank/rank_phucloi.php'); break;
            case 'rank_point': include('modules/rank/rank_point.php'); break;
            case 'rank_songtu': include('modules/rank/rank_songtu.php'); break;
			
			default : $page_template = 'templates/rank.tpl';
		}
}
?>